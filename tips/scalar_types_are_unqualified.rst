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
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/scalar_types_are_unqualified.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/scalar_types_are_unqualified.png
	:og:title: Scalar Types Are Unqualified
	:og:type: article
	:og:description: Scalar types, such as ``int`` or ``iterable`` shall only be used without the leading slash
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/scalar_types_are_unqualified.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/scalar_types_are_unqualified.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/scalar_types_are_unqualified.html","name":"Scalar Types Are Unqualified","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Dec 2024 22:07:55 +0000","dateModified":"Fri, 06 Dec 2024 22:07:55 +0000","description":"Scalar types, such as ``int`` or ``iterable`` shall only be used without the leading slash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/scalar_types_are_unqualified.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Scalar types, such as ``int`` or ``iterable`` shall only be used without the leading slash. Yet, there are some exceptions, in PHP 8.3, ``callable`` and ``array`` are still mistaken for a class name, leading to strangely worded error message.

.. image:: ../images/scalar_types_are_unqualified.png

* `Type declaration (PHP manual) <https://www.php.net/manual/en/language.types.declarations.php>`_


