.. _cast-a-closure-to-array:

Cast A Closure To Array
-----------------------

.. meta::
	:description:
		Cast A Closure To Array: TIL: ``(array) $obj`` will result in ``array<string, mixed>`` ( properties key/value pairs ), with the exception if ``$obj`` is Closure, where the result would be ``[$obj]``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cast A Closure To Array
	:twitter:description: Cast A Closure To Array: TIL: ``(array) $obj`` will result in ``array<string, mixed>`` ( properties key/value pairs ), with the exception if ``$obj`` is Closure, where the result would be ``[$obj]``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/closure_to_array.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/closure_to_array.png
	:og:title: Cast A Closure To Array
	:og:type: article
	:og:description: TIL: ``(array) $obj`` will result in ``array<string, mixed>`` ( properties key/value pairs ), with the exception if ``$obj`` is Closure, where the result would be ``[$obj]``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/closure_to_array.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_to_array.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_to_array.html","name":"Cast A Closure To Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:10 +0000","dateModified":"Tue, 14 Jul 2026 14:31:10 +0000","description":"TIL: ``(array) $obj`` will result in ``array<string, mixed>`` ( properties key\/value pairs ), with the exception if ``$obj`` is Closure, where the result would be ``[$obj]``","inLanguage":"en-US","author":{"@id":"https:\/\/github.com\/azjezz"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_to_array.html"]}]},{"@type":"Person","@id":"https:\/\/github.com\/azjezz","name":"Saif Eddin Gmati","url":"https:\/\/github.com\/azjezz","sameAs":["https:\/\/github.com\/azjezz"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Saif Eddin Gmati <https://github.com/azjezz>`_

.. code-block:: php

   <?php
   
   class X {
       private $p = 1;
       public $q = 2;
   }
   
   $x = new x;
   $y = (array) $x;
   print_r($y);
   
   /*
   Array
   (
       [Xp] => 1
       [q] => 2
   )
   */
   
   $f = function() {};
   print get_class($f);  /// Closure
   var_dump((array) $f);
   
   /*
   Closure
   array(1) {
     [0]=>
     object(Closure)#2 (0) {
     }
   }
   */
   ?>


TIL: ``(array) $obj`` will result in ``array<string, mixed>`` ( properties key/value pairs ), with the exception if ``$obj`` is Closure, where the result would be ``[$obj]``.

See Also
________

* `Mastering the (array) Cast Operator in PHP <https://www.exakat.io/mastering-the-array-cast-operator-in-php-a-comprehensive-guide/>`_
* `Casting a closure to array <https://3v4l.org/4FGnj>`_ [Try me]


PHP Features
____________

* `closure <https://php-dictionary.readthedocs.io/en/latest/dictionary/closure.ini.html>`_

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_


