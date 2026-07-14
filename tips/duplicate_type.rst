.. _duplicate-type:

Duplicate Type
--------------

.. meta::
	:description:
		Duplicate Type: Union types check for duplicate types, so ``array|array`` is not possible, nor if a class is aliased with a use expression: on the other hand, it is valid with a class alias, created with ``class_alias()``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Duplicate Type
	:twitter:description: Duplicate Type: Union types check for duplicate types, so ``array|array`` is not possible, nor if a class is aliased with a use expression: on the other hand, it is valid with a class alias, created with ``class_alias()``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/duplicate_type.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/duplicate_type.png
	:og:title: Duplicate Type
	:og:type: article
	:og:description: Union types check for duplicate types, so ``array|array`` is not possible, nor if a class is aliased with a use expression: on the other hand, it is valid with a class alias, created with ``class_alias()``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/duplicate_type.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/duplicate_type.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/duplicate_type.html","name":"Duplicate Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:25 +0000","dateModified":"Tue, 14 Jul 2026 14:31:25 +0000","description":"Union types check for duplicate types, so ``array|array`` is not possible, nor if a class is aliased with a use expression: on the other hand, it is valid with a class alias, created with ``class_alias()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/duplicate_type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class_alias('a', 'c');
   use A as B;
   
   // duplicate hidden type
   function foo(array | iterable $b) {}
   
   // d8plicate type
   function foo2(a | b $b) {}
   
   // a and c are always considered distinct
   function foo3(a | c $b) {}
   
   // PHP is smarter than this poor usage of DNF
   function foo4((a & b) | (b & a) $b) {}
   
   ?>


Union types check for duplicate types, so ``array|array`` is not possible, nor if a class is aliased with a use expression: on the other hand, it is valid with a class alias, created with ``class_alias()``.

The last case is the union type that actually hides the type: here, iterable includes array, so PHP complains about a duplicate, which is not visible at first sight.

Note that intersectional types also check for duplicate types.

See Also
________

* `Duplicate types <https://3v4l.org/SvDIP#v8.5.7>`_ [Try me]


PHP Error Messages
__________________

* `Duplicate type array is redundant <https://php-errors.readthedocs.io/en/latest/messages/duplicate-type-%25s-is-redundant.html>`_



PHP Features
____________

* `type <https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html>`_

* `iterable <https://php-dictionary.readthedocs.io/en/latest/dictionary/iterable.ini.html>`_

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `class_alias <https://php-dictionary.readthedocs.io/en/latest/dictionary/class_alias.ini.html>`_

* `use-alias <https://php-dictionary.readthedocs.io/en/latest/dictionary/use-alias.ini.html>`_


