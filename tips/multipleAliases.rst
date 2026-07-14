.. _multiple-aliases:

Multiple Aliases
----------------

.. meta::
	:description:
		Multiple Aliases: It is possible to rename an imported method from a trait, by using an alias name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiple Aliases
	:twitter:description: Multiple Aliases: It is possible to rename an imported method from a trait, by using an alias name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/multipleAliases.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/multipleAliases.png
	:og:title: Multiple Aliases
	:og:type: article
	:og:description: It is possible to rename an imported method from a trait, by using an alias name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/multipleAliases.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/multipleAliases.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/multipleAliases.html","name":"Multiple Aliases","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:25+00:00","dateModified":"2026-07-14T14:32:25+00:00","description":"It is possible to rename an imported method from a trait, by using an alias name","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/multipleAliases.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   trait t {
       function foo() {
           echo __METHOD__.PHP_EOL;
       }
   }
   
   class x {
       use t {
           foo as goo;
           foo as ioo;
       }
   }
   
   (new x)->foo(); // t::foo
   (new x)->goo(); // t::foo
   (new x)->ioo(); // t::foo


It is possible to rename an imported method from a trait, by using an alias name. It is also possible to import it several times, with different names.

And, unlike static/self, it is not possible for the called method to know how it was called.

See Also
________

* `Traits <https://www.php.net/manual/en/language.oop5.traits.php>`_
* `Multiple same alias <https://3v4l.org/Is251>`_ [Try me]


PHP Features
____________

* `trait <https://php-dictionary.readthedocs.io/en/latest/dictionary/trait.ini.html>`_

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_



Last updated: 14 July 2026