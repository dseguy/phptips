.. _array-and-object-syntax-not-the-same-error:

Array And Object Syntax, Not The Same Error
-------------------------------------------

.. meta::
	:description:
		Array And Object Syntax, Not The Same Error: When accessing an array as an object, PHP raises a Warning and continues with NULL.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array And Object Syntax, Not The Same Error
	:twitter:description: Array And Object Syntax, Not The Same Error: When accessing an array as an object, PHP raises a Warning and continues with NULL
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/not_same_error.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/not_same_error.png
	:og:title: Array And Object Syntax, Not The Same Error
	:og:type: article
	:og:description: When accessing an array as an object, PHP raises a Warning and continues with NULL
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/not_same_error.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_same_error.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_same_error.html","name":"Array And Object Syntax, Not The Same Error","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:49+00:00","dateModified":"2026-07-14T14:32:49+00:00","description":"When accessing an array as an object, PHP raises a Warning and continues with NULL","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_same_error.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function foo() {
       yield 1;
       yield 2;
       yield 3;
       
       return ' 4';
   }
   
   function goo($a, $b, $c) {
       print "$a $b $c";
   }
   print PHP_EOL;
   
   goo(...foo());
   
   goo(...($g = foo()));
   echo $g->getReturn();
   
   ?>


When accessing an array as an object, PHP raises a Warning and continues with NULL.

When accessing an object as an array, without ``ArrayAccess``, PHP raises a Fatal Error and stops.

It is critical to check the syntax used to access an object.

See Also
________

* `Array (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_
* `Objects (PHP manual) <https://www.php.net/manual/en/language.types.object.php>`_
* `yield but not return on 3v4l.org <https://3v4l.org/DLIiA>`_ [Try me]


PHP Features
____________

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `arrayaccess <https://php-dictionary.readthedocs.io/en/latest/dictionary/arrayaccess.ini.html>`_



Last updated: 14 July 2026