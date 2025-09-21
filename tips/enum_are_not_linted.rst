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

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum_are_not_linted.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum_are_not_linted.html","name":"Enum Are Not Linted","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Jun 2025 15:55:12 +0000","dateModified":"Mon, 16 Jun 2025 15:55:12 +0000","description":"It is possible to give two identical values to different enumeration cases, but not to execute it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum_are_not_linted.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/enum_are_not_linted.png

It is possible to give two identical values to different enumeration cases, but not to execute it.

In PHP 8.1, duplicate case values generated a compilation error.

Since PHP 8.2, it is now waiting for the execution stage and the first usage of the enumeration, to raise a fatal error.

See Also
________

* `Enumeration <https://www.php.net/manual/en/language.types.enumerations.php>`_
* `Check on case values, at execution time <https://3v4l.org/1bOLV>`_ [Try me]


PHP Error Messages
__________________

* `Duplicate value in enum E for cases A and B <https://php-errors.readthedocs.io/en/latest/messages/duplicate-value-in-enum-%25s-for-cases-%25s-and-%25s.html>`_



PHP Features
____________

* `backed-enum <https://php-dictionary.readthedocs.io/en/latest/dictionary/backed-enum.ini.html>`_

* `case <https://php-dictionary.readthedocs.io/en/latest/dictionary/case.ini.html>`_


