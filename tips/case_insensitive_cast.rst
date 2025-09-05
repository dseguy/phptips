.. _case-insensitive-cast:

Case Insensitive Cast
---------------------

.. meta::
	:description:
		Case Insensitive Cast: PHP's cast operators are case-insensitive, meaning variations like ``(int)``, ``(INT)``, and ``(iNt)`` all work the same way.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Case Insensitive Cast
	:twitter:description: Case Insensitive Cast: PHP's cast operators are case-insensitive, meaning variations like ``(int)``, ``(INT)``, and ``(iNt)`` all work the same way
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/case_insensitive_cast.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/case_insensitive_cast.png
	:og:title: Case Insensitive Cast
	:og:type: article
	:og:description: PHP's cast operators are case-insensitive, meaning variations like ``(int)``, ``(INT)``, and ``(iNt)`` all work the same way
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/case_insensitive_cast.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/case_insensitive_cast.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/case_insensitive_cast.html","name":"Case Insensitive Cast","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Jun 2025 15:56:31 +0000","dateModified":"Mon, 16 Jun 2025 15:56:31 +0000","description":"PHP's cast operators are case-insensitive, meaning variations like ``(int)``, ``(INT)``, and ``(iNt)`` all work the same way","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/case_insensitive_cast.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP's cast operators are case-insensitive, meaning variations like ``(int)``, ``(INT)``, and ``(iNt)`` all work the same way. However, the common convention is to use all lowercase, such as ``(int)``. Using other case styles is technically valid but extremely rare and generally discouraged for consistency and readability in code. Stick to lowercase for better code standards.

.. image:: ../images/case_insensitive_cast.png

See Also
________

* `Type Juggling <https://www.php.net/manual/en/language.types.type-juggling.php>`_
* `cast or CAST <https://3v4l.org/FUbgY>`_ [Try me]


PHP Features
____________

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_

* `syntax <https://php-dictionary.readthedocs.io/en/latest/dictionary/syntax.ini.html>`_


