.. _recursive-closure:

Recursive Closure
-----------------

.. meta::
	:description:
		Recursive Closure: To make a recursive closure, the closure must be both stored in a variable and passed as a ``use`` parameter to the same factorial.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Recursive Closure
	:twitter:description: Recursive Closure: To make a recursive closure, the closure must be both stored in a variable and passed as a ``use`` parameter to the same factorial
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/recursive_closure.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/recursive_closure.png
	:og:title: Recursive Closure
	:og:type: article
	:og:description: To make a recursive closure, the closure must be both stored in a variable and passed as a ``use`` parameter to the same factorial
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/recursive_closure.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_closure.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_closure.html","name":"Recursive Closure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:11 +0000","dateModified":"Tue, 14 Jul 2026 14:33:11 +0000","description":"To make a recursive closure, the closure must be both stored in a variable and passed as a ``use`` parameter to the same factorial","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_closure.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $factorial = function (int $n) use (&factorial) {
       if ($n === 1) {
           return 1;
       }
       
       return $factorial($n - 1) * $n;
   };
   
   print factorial( 5 );
   
   ?>


To make a recursive closure, the closure must be both stored in a variable and passed as a ``use`` parameter to the same factorial.

It also works for arrow functions, although there is no the use, but the variable must be defined first, so it can be used in context later.

See Also
________

* `Closure (PHP manual) <https://www.php.net/manual/en/class.closure.php>`_
* `All the recursive Functions in PHP <https://www.exakat.io/all-the-recursive-functions-in-php/>`_
* `recursive closure <https://3v4l.org/3MHeR>`_ [Try me]


PHP Features
____________

* `closure <https://php-dictionary.readthedocs.io/en/latest/dictionary/closure.ini.html>`_

* `arrow-function <https://php-dictionary.readthedocs.io/en/latest/dictionary/arrow-function.ini.html>`_

* `recursion <https://php-dictionary.readthedocs.io/en/latest/dictionary/recursion.ini.html>`_


