.. _a-non-transitive-comparison:

A Non-transitive Comparison
---------------------------

.. meta::
	:description:
		A Non-transitive Comparison: Sometimes I truly believe that I have grasped all of the weird semantics of PHP, and then I discover something so simple that breaks an assumption I had about the language.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A Non-transitive Comparison
	:twitter:description: A Non-transitive Comparison: Sometimes I truly believe that I have grasped all of the weird semantics of PHP, and then I discover something so simple that breaks an assumption I had about the language
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/non-transitive-comparison.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/non-transitive-comparison.png
	:og:title: A Non-transitive Comparison
	:og:type: article
	:og:description: Sometimes I truly believe that I have grasped all of the weird semantics of PHP, and then I discover something so simple that breaks an assumption I had about the language
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/non-transitive-comparison.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-transitive-comparison.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-transitive-comparison.html","name":"A Non-transitive Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:23:58 +0000","dateModified":"Tue, 14 Jul 2026 14:23:58 +0000","description":"Sometimes I truly believe that I have grasped all of the weird semantics of PHP, and then I discover something so simple that breaks an assumption I had about the language","inLanguage":"en-US","author":{"@id":"https:\/\/github.com\/Girgias"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-transitive-comparison.html"]}]},{"@type":"Person","@id":"https:\/\/github.com\/Girgias","name":"Gina Peter Banyard","url":"https:\/\/github.com\/Girgias","sameAs":["https:\/\/github.com\/Girgias"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Gina Peter Banyard <https://github.com/Girgias>`_

.. code-block:: php

   <?php
   
   var_dump('0' == 0);
   
   var_dump('0' == false);
   var_dump(0 == false);
   
   // Non transifive
   var_dump('0' == null);
   var_dump(0 == null);


Sometimes I truly believe that I have grasped all of the weird semantics of PHP, and then I discover something so simple that breaks an assumption I had about the language.

I knew that ``NAN == X`` can return ``true``.

I knew that the comparison operators are not transitive.

I *obviously* knew that ``"0" == 0`` and ``"0" == false`` return true.

And yet it was *foolish* of me to believe that all instance of ``X == false`` would give the same answer as ``X == null``.

As TIL ``"0" == null`` is false.

See Also
________

* `Original toot <https://phpc.social/@Girgias/116886912948591955>`_
* `Non-transitive comparison <https://3v4l.org/f64Z6#v8.5.8>`_ [Try me]


PHP Features
____________

* `zero <https://php-dictionary.readthedocs.io/en/latest/dictionary/zero.ini.html>`_

* `null <https://php-dictionary.readthedocs.io/en/latest/dictionary/null.ini.html>`_

* `comparison <https://php-dictionary.readthedocs.io/en/latest/dictionary/comparison.ini.html>`_


