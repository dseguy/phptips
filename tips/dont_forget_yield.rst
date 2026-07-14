.. _dont-forget-to-yield:

Don't Forget To Yield
---------------------

.. meta::
	:description:
		Don't Forget To Yield: It is possible to delegate a generator to another generator.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Don't Forget To Yield
	:twitter:description: Don't Forget To Yield: It is possible to delegate a generator to another generator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/dont_forget_yield.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/dont_forget_yield.png
	:og:title: Don't Forget To Yield
	:og:type: article
	:og:description: It is possible to delegate a generator to another generator
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dont_forget_yield.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/dont_forget_yield.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/dont_forget_yield.html","name":"Don't Forget To Yield","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:24 +0000","dateModified":"Tue, 14 Jul 2026 14:31:24 +0000","description":"It is possible to delegate a generator to another generator","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/dont_forget_yield.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function foo() {
       yield 'foo';
       goo();
   }
   
   function too() {
       yield 'too';
       yield from goo();
   }
   
   function hoo() {
       yield 'hoo';
       yield goo();
   }
   
   function goo() {
       yield 'goo';
   }
   
   foreach(foo() as $a) { print $a.PHP_EOL;}
   // goo
   foreach(too() as $a) { print $a.PHP_EOL;}
   // too goo
   foreach(hoo() as $a) { print $a.PHP_EOL;}
   // hoo Uncaught Error: Object of class Generator
   // could not be converted to string
   
   ?>


It is possible to delegate a generator to another generator.

One point to keep in mind is that they should not be called raw, as nothing happens.

And don't forget the ``from`` part of the keyword, otherwise, it yields the generator, instead of running it.

See Also
________

* `Generator syntax <https://www.php.net/manual/en/language.generators.syntax.php>`_
* `No yield, no loop <https://3v4l.org/Znbbl>`_ [Try me]


PHP Features
____________

* `function <https://php-dictionary.readthedocs.io/en/latest/dictionary/function.ini.html>`_

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `yield <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield.ini.html>`_


