.. _yield-or-return:

Yield Or Return
---------------

.. meta::
	:description:
		Yield Or Return: It is possible to spread an array as dynamic arguments: this applies to returned arrays, after a function call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Yield Or Return
	:twitter:description: Yield Or Return: It is possible to spread an array as dynamic arguments: this applies to returned arrays, after a function call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/yield_or_return.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/yield_or_return.png
	:og:title: Yield Or Return
	:og:type: article
	:og:description: It is possible to spread an array as dynamic arguments: this applies to returned arrays, after a function call
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/yield_or_return.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_or_return.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_or_return.html","name":"Yield Or Return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:06:03 +0000","dateModified":"Tue, 14 Jul 2026 14:06:03 +0000","description":"It is possible to spread an array as dynamic arguments: this applies to returned arrays, after a function call","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_or_return.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function foo() {
       yield 1;
       yield 2;
       yield 3;
       
       return ['a', 'b', 'c'];
   }
   
   function foo2() {
       return ['a', 'b', 'c'];
   }
   
   function goo($x, $y, $z) {
       print "$x $y $z\n";
   }
   
   goo(...foo());
   goo(...foo2());


It is possible to spread an array as dynamic arguments: this applies to returned arrays, after a function call.

The function call may be actually of two types: function or a generator.

The first type is a generator: then, the yielded values are used as argument and the returned array is ignored.

In the second case, the array is returned and used.

See Also
________

* `Array or yield? <https://3v4l.org/lS3WS#v>`_ [Try me]


PHP Features
____________

* `generator <https://php-dictionary.readthedocs.io/en/latest/dictionary/generator.ini.html>`_

* `array-spread <https://php-dictionary.readthedocs.io/en/latest/dictionary/array-spread.ini.html>`_

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `argument <https://php-dictionary.readthedocs.io/en/latest/dictionary/argument.ini.html>`_


