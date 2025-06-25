.. _interfaces-constants-conflicts:

Interfaces Constants Conflicts
------------------------------

.. meta::
	:description:
		Interfaces Constants Conflicts: PHP reports duplicate constant definitions in different interfaces.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interfaces Constants Conflicts
	:twitter:description: Interfaces Constants Conflicts: PHP reports duplicate constant definitions in different interfaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/interface_constant_conflict.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/interface_constant_conflict.png
	:og:title: Interfaces Constants Conflicts
	:og:type: article
	:og:description: PHP reports duplicate constant definitions in different interfaces
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/interface_constant_conflict.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface_constant_conflict.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface_constant_conflict.html","name":"Interfaces Constants Conflicts","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 25 Jun 2025 20:22:16 +0000","dateModified":"Wed, 25 Jun 2025 20:22:16 +0000","description":"PHP reports duplicate constant definitions in different interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface_constant_conflict.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP reports duplicate constant definitions in different interfaces.

This is very unusual occurrence, reported at linting time. It may also lead to quite a set back when one has to untangle these definitions.

So, shall we always give unique names across interfaces? Or just avoid multiple interfaces with constants on the same class?

There is no 'use' expression to solve the conflict.

Also, multiple same methods in different interface are OK.

.. image:: ../images/interface_constant_conflict.png

See Also
________

* `Object Interfaces (PHP manual) <https://www.php.net/manual/en/language.oop5.interfaces.php>`_
* `interfaces conflicts <https://3v4l.org/Dpu8t>`_ [Try me]

