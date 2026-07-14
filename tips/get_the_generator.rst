.. _get-the-generator:

Get The Generator
-----------------

.. meta::
	:description:
		Get The Generator: It is possible to catch a generator when it is called, by putting it in a variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Get The Generator
	:twitter:description: Get The Generator: It is possible to catch a generator when it is called, by putting it in a variable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/get_the_generator.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/get_the_generator.png
	:og:title: Get The Generator
	:og:type: article
	:og:description: It is possible to catch a generator when it is called, by putting it in a variable
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/get_the_generator.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_the_generator.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_the_generator.html","name":"Get The Generator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:49 +0000","dateModified":"Tue, 14 Jul 2026 14:31:49 +0000","description":"It is possible to catch a generator when it is called, by putting it in a variable","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_the_generator.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function foo() {
       yield 1;
       return "a";
   }
   
   function goo($a) {
       print $a . PHP_EOL;
   }
   
   goo(...($generator = foo()));
   
   print $generator->getReturn();
   // la
   
   foreach (($generator = foo()) as $b) {
       print $b . PHP_EOL;
   }
   print $generator->getReturn();
   // la
   
   ?>


It is possible to catch a generator when it is called, by putting it in a variable. Once the generator has been used, it is possible to call a method such as ``getReturn`` on it.

This works with ``...`` and ``foreach``.

See Also
________

* `Generators overview (PHP manual) <https://www.php.net/manual/en/language.generators.overview.php>`_
* `Get The Generator <https://3v4l.org/S24Re>`_ [Try me]


PHP Features
____________

* `ellipsis <https://php-dictionary.readthedocs.io/en/latest/dictionary/ellipsis.ini.html>`_

* `yield <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield.ini.html>`_


