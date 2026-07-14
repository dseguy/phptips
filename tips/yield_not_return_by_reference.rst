.. _yield-not-return-by-reference:

Yield, Not Return By Reference
------------------------------

.. meta::
	:description:
		Yield, Not Return By Reference: When a method returns a reference, there is a ``&`` before its name, in the signature.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Yield, Not Return By Reference
	:twitter:description: Yield, Not Return By Reference: When a method returns a reference, there is a ``&`` before its name, in the signature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/yield_not_return_by_reference.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/yield_not_return_by_reference.png
	:og:title: Yield, Not Return By Reference
	:og:type: article
	:og:description: When a method returns a reference, there is a ``&`` before its name, in the signature
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/yield_not_return_by_reference.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_not_return_by_reference.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_not_return_by_reference.html","name":"Yield, Not Return By Reference","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:34:06+00:00","dateModified":"2026-07-14T14:34:06+00:00","description":"When a method returns a reference, there is a ``&`` before its name, in the signature","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_not_return_by_reference.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function &gen() {
       yield 'foo';
       
       return 'Literal';
   }
   
   $gen = gen();
   var_dump($gen->current());
   
   
   foreach($gen as $a) {
       print $a;
   }
   
   print $gen->getReturn();
   
   ?>


When a method returns a reference, there is a ``&`` before its name, in the signature. This means that the function must return a variable, or a property, and not a literal value.

When the same ``&`` is added on a generator, this now means that the yielded values are by reference. On the other hand, the returned value mat be a literal value, without generating a warning.

See Also
________

* `Generator syntax <https://www.php.net/manual/en/language.generators.syntax.php>`_
* `Returning value <https://www.php.net/manual/en/functions.returning-values.php>`_
* `No reference for yield <https://3v4l.org/KQ4Nq>`_ [Try me]


PHP Features
____________

* `reference <https://php-dictionary.readthedocs.io/en/latest/dictionary/reference.ini.html>`_

* `generator <https://php-dictionary.readthedocs.io/en/latest/dictionary/generator.ini.html>`_

* `yield <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield.ini.html>`_



Last updated: 14 July 2026