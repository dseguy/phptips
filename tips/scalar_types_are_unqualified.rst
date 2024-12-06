.. _scalar-types-are-unqualified:

Scalar Types Are Unqualified
----------------------------

.. meta::
	:description:
		Scalar Types Are Unqualified: Scalar types, such as ``int`` or ``iterable`` shall only be used without the leading slash.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Scalar Types Are Unqualified
	:twitter:description: Scalar Types Are Unqualified: Scalar types, such as ``int`` or ``iterable`` shall only be used without the leading slash
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/scalar_types_are_unqualified.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/scalar_types_are_unqualified.png
	:og:title: Scalar Types Are Unqualified
	:og:type: article
	:og:description: Scalar types, such as ``int`` or ``iterable`` shall only be used without the leading slash
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/scalar_types_are_unqualified.html
	:og:locale: en

Scalar types, such as ``int`` or ``iterable`` shall only be used without the leading slash. Yet, there are some exceptions, in PHP 8.3, ``callable`` and ``array`` are still mistaken for a class name, leading to strangely worded error message.

.. image:: ../images/scalar_types_are_unqualified.png

* `Type declaration (PHP manual) <https://www.php.net/manual/en/language.types.declarations.php>`_


