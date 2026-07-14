.. _strict_types-exceptions:

strict_types Exceptions
-----------------------

.. meta::
	:description:
		strict_types Exceptions: strict_types do not apply to PHP operators, only on to typed structures.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strict_types Exceptions
	:twitter:description: strict_types Exceptions: strict_types do not apply to PHP operators, only on to typed structures
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/strict_types_exceptions.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/strict_types_exceptions.png
	:og:title: strict_types Exceptions
	:og:type: article
	:og:description: strict_types do not apply to PHP operators, only on to typed structures
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strict_types_exceptions.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strict_types_exceptions.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strict_types_exceptions.html","name":"strict_types Exceptions","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:39+00:00","dateModified":"2026-07-14T14:33:39+00:00","description":"strict_types do not apply to PHP operators, only on to typed structures","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strict_types_exceptions.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php declare(strict_types = 1);
   
   class x {
     function __toString() : string {
       return "abc";
     }
   }
   
   $x = new x;
   print $x . " and $x
   ";
   
   print $x;
   echo $x;
   echo PHP_EOL;
   
   print implode(', ', [$x, $x]);
   print implode($x, [1, 2]);
   
   ?>


strict_types do not apply to PHP operators, only on to typed structures.

Here, concatenation and interpolation all call __toString(), but not foo().

As you can see, print() and echo() are safe too, while implode() is not: actually, it is not safe for the first argument, but still OK with the elements of the array, in the second argument.

See Also
________

* `declare <https://www.php.net/manual/en/control-structures.declare.php>`_
* `strict types exceptions <https://3v4l.org/R6XVR>`_ [Try me]


PHP Features
____________

* `strict_types <https://php-dictionary.readthedocs.io/en/latest/dictionary/strict_types.ini.html>`_

* `exception <https://php-dictionary.readthedocs.io/en/latest/dictionary/exception.ini.html>`_

* `operator <https://php-dictionary.readthedocs.io/en/latest/dictionary/operator.ini.html>`_



Last updated: 14 July 2026