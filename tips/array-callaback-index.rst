.. _array-callback-index:

Array Callback Index
--------------------

.. meta::
	:description:
		Array Callback Index: An array callback must be built with two elements, and their index must be ``0``, for the class or object, and ``1`` for the method name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Callback Index
	:twitter:description: Array Callback Index: An array callback must be built with two elements, and their index must be ``0``, for the class or object, and ``1`` for the method name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/array-callaback-index.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/array-callaback-index.png
	:og:title: Array Callback Index
	:og:type: article
	:og:description: An array callback must be built with two elements, and their index must be ``0``, for the class or object, and ``1`` for the method name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array-callaback-index.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-callaback-index.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-callaback-index.html","name":"Array Callback Index","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:30:33+00:00","dateModified":"2026-07-14T14:30:33+00:00","description":"An array callback must be built with two elements, and their index must be ``0``, for the class or object, and ``1`` for the method name","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-callaback-index.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x {
       static function foo() { echo __METHOD__.PHP_EOL;}
   }
   
   ['x', 'foo']();
   [0 => 'x', 1 => 'foo']();
   //Array callback has to contain indices 0 and 1
   //[10 => 'x', 11 => 'foo']();
   //Array callback must have exactly two elements
   //[10 => 'x', 11 => 'foo', 0 =>0, 1=>1]();
   
   // OK! 
   [1 => 'foo', 0 => 'x']();


An array callback must be built with two elements, and their index must be ``0``, for the class or object, and ``1`` for the method name. PHP enforces the number of elements in the array, and the actual used index.

On the other hand, one may build the array in the wrong order but the correct index, and get the expected result. Nice!

See Also
________

* `Callbacks / Callables (PHP manual) <https://www.php.net/manual/en/language.types.callable.php>`_
* `Which array is callable?  <https://3v4l.org/49TcN>`_ [Try me]


PHP Error Messages
__________________

* `Array callback has to contain indices 0 and 1 <https://php-errors.readthedocs.io/en/latest/messages/array-callback-has-to-contain-indices-0-and-1.html>`_

* `Array callback must have exactly two elements <https://php-errors.readthedocs.io/en/latest/messages/array-callback-must-have-exactly-two-elements.html>`_



PHP Features
____________

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `array-callable <https://php-dictionary.readthedocs.io/en/latest/dictionary/array-callable.ini.html>`_

* `callable <https://php-dictionary.readthedocs.io/en/latest/dictionary/callable.ini.html>`_

* `index-array <https://php-dictionary.readthedocs.io/en/latest/dictionary/index-array.ini.html>`_

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_



Last updated: 14 July 2026