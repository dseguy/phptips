.. _enum-are-not-linted:

Enum Are Not Linted
-------------------

.. meta::
	:description:
		Enum Are Not Linted: It is possible to give two identical values to different enumeration cases, but not to execute it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enum Are Not Linted
	:twitter:description: Enum Are Not Linted: It is possible to give two identical values to different enumeration cases, but not to execute it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/enum_are_not_linted.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/enum_are_not_linted.png
	:og:title: Enum Are Not Linted
	:og:type: article
	:og:description: It is possible to give two identical values to different enumeration cases, but not to execute it
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/enum_are_not_linted.html
	:og:locale: en

It is possible to give two identical values to different enumeration cases, but not to execute it.

In PHP 8.1, duplicate case values generated a compilation error.

Since PHP 8.2, it is now waiting for the execution stage and the first usage of the enumeration, to raise a fatal error.

.. image:: ../images/enum_are_not_linted.png

* `Enumeration <https://www.php.net/manual/en/language.types.enumerations.php>`_


