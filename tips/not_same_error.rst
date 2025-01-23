.. _array-and-object-syntax,-not-the-same-error:

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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_same_error.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_same_error.html","name":"Array And Object Syntax, Not The Same Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jan 2025 10:37:49 +0000","dateModified":"Fri, 17 Jan 2025 10:37:49 +0000","description":"When accessing an array as an object, PHP raises a Warning and continues with NULL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_same_error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

When accessing an array as an object, PHP raises a Warning and continues with NULL.

When accessing an object as an array, without ArrayAccess, PHP raises a Fatal Error and stops.

 It is critical to check the syntax used to access an object.

.. image:: ../images/not_same_error.png

* `Array (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_
* `Objects (PHP manual) <https://www.php.net/manual/en/language.types.object.php>`_


