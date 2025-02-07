.. _all-classes-aliases:

All Classes Aliases
-------------------

.. meta::
	:description:
		All Classes Aliases: To make a class alias, use class_alias().
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: All Classes Aliases
	:twitter:description: All Classes Aliases: To make a class alias, use class_alias()
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/class_alias_alias.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/class_alias_alias.png
	:og:title: All Classes Aliases
	:og:type: article
	:og:description: To make a class alias, use class_alias()
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/class_alias_alias.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_alias_alias.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_alias_alias.html","name":"All Classes Aliases","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 14 Nov 2024 20:39:14 +0000","dateModified":"Thu, 14 Nov 2024 20:39:14 +0000","description":"To make a class alias, use class_alias()","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_alias_alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

To make a class alias, use class_alias();

To make an interface alias, use class_alias();

To make an enum alias, use class_alias();

To make a trait alias, use class_alias();



Also, there is no ``::enum`` operator, ``::trait`` operator or ``::interface`` operator, so you can just just ``::class``

In the end, they all share the same name space.

.. image:: ../images/class_alias_alias.png

See Also
________

* `class_alias (PHP manual) <https://www.php.net/class_alias>`_

