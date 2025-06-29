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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/scalar_types_are_unqualified.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/scalar_types_are_unqualified.html","name":"Scalar Types Are Unqualified","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 08:06:21 +0000","dateModified":"Sat, 28 Jun 2025 08:06:21 +0000","description":"Scalar types like ``int `` or  ``iterable`` should be used without a leading slash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/scalar_types_are_unqualified.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Scalar types like ``int `` or  ``iterable`` should be used without a leading slash. However, there are exceptions. In PHP 8.3, types such as  ``callable `` and  ``array`` are still misinterpreted as class names, which can result in confusing or poorly worded error messages. This inconsistency remains a known issue in the language, affecting type declarations and error reporting for these specific cases, until PHP 8.5.

.. image:: ../images/scalar_types_are_unqualified.png

See Also
________

* `Type declaration (PHP manual) <https://www.php.net/manual/en/language.types.declarations.php>`_
* `strange error messages <https://3v4l.org/YRE3Q>`_ [Try me]

