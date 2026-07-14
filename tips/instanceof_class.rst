.. _instanceof-object:

instanceof Object
-----------------

.. meta::
	:description:
		instanceof Object: object is a type, but it can also be used as a constant name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: instanceof Object
	:twitter:description: instanceof Object: object is a type, but it can also be used as a constant name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/instanceof_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/instanceof_class.png
	:og:title: instanceof Object
	:og:type: article
	:og:description: object is a type, but it can also be used as a constant name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/instanceof_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instanceof_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instanceof_class.html","name":"instanceof Object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:53:05 +0000","dateModified":"Tue, 14 Jul 2026 14:53:05 +0000","description":"object is a type, but it can also be used as a constant name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instanceof_class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class a {}
   
   $a = new a;
   
   $b = '\\a';
   var_dump($a instanceof $b);
   var_dump($a instanceof \a);
   
   // C is not a constant, but a class name (see use)
   const object = '\\a';
   var_dump($a instanceof object);
   use a as c;
   var_dump($a instanceof c);
   
   // compile error : unexpected T_CLASS
   // var_dump($a instanceof a::class);
   // compile error : unexpected T_CONSTANT_ENCAPS_STRING
   // var_dump($a instanceof 'a');


object is a type, but it can also be used as a constant name. Then, instanceof accepts it for testing a variable.

There are some other cases around instanceof, which are surprising upon first read.

It is possible to use a string or an object in a variable, but not a direct string, a constant nor a ``::class``.

See Also
________

* `Type Operators (PHP manual) <https://www.php.net/manual/en/language.operators.type.php>`_
* `instance of a class <https://3v4l.org/Qig0E>`_ [Try me]


PHP Features
____________

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/constant.ini.html>`_


