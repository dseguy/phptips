.. _scalar-types-are-unqualified:

Scalar Types Are Unqualified
----------------------------

.. meta::
	:description:
		Scalar Types Are Unqualified: Scalar types like ``int `` or  ``iterable`` should be used without a leading slash.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Scalar Types Are Unqualified
	:twitter:description: Scalar Types Are Unqualified: Scalar types like ``int `` or  ``iterable`` should be used without a leading slash
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/scalar_types_are_unqualified.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/scalar_types_are_unqualified.png
	:og:title: Scalar Types Are Unqualified
	:og:type: article
	:og:description: Scalar types like ``int `` or  ``iterable`` should be used without a leading slash
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/scalar_types_are_unqualified.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/scalar_types_are_unqualified.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/scalar_types_are_unqualified.html","name":"Scalar Types Are Unqualified","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:52:51+00:00","dateModified":"2026-07-14T14:52:51+00:00","description":"Scalar types like ``int `` or  ``iterable`` should be used without a leading slash","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/scalar_types_are_unqualified.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function foo(\array $array) {}
   foo([]);
   //TypeError: foo(): Argument #1 ($array) must be of type array, array given, 
   
   function goo(\callable $callable) {}
   goo(strlen(...));
   //TypeError: foo(): Argument #1 ($array) must be of type callable, array Colsure, 
   
   function hoo(\int $int) {}
   hoo(1);
   //Type declaration 'int' must be unqualifid


Scalar types like ``int `` or  ``iterable`` should be used without a leading slash. However, there are exceptions. In PHP 8.3, types such as  ``callable `` and  ``array`` are still misinterpreted as class names, which can result in confusing or poorly worded error messages. This inconsistency remains a known issue in the language, affecting type declarations and error reporting for these specific cases, until PHP 8.5.

See Also
________

* `Type declaration (PHP manual) <https://www.php.net/manual/en/language.types.declarations.php>`_
* `strange error messages <https://3v4l.org/YRE3Q>`_ [Try me]


PHP Features
____________

* `type <https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html>`_

* `bug <https://php-dictionary.readthedocs.io/en/latest/dictionary/bug.ini.html>`_

* `scalar-type <https://php-dictionary.readthedocs.io/en/latest/dictionary/scalar-type.ini.html>`_



Last updated: 14 July 2026