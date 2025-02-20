.. _initialize-readonly-on-child:

Initialize Readonly On Child
----------------------------

.. meta::
	:description:
		Initialize Readonly On Child: Readonly properties could only be initialized in the same class as their definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Initialize Readonly On Child
	:twitter:description: Initialize Readonly On Child: Readonly properties could only be initialized in the same class as their definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/initialize_readonly_on_child.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/initialize_readonly_on_child.png
	:og:title: Initialize Readonly On Child
	:og:type: article
	:og:description: Readonly properties could only be initialized in the same class as their definition
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/initialize_readonly_on_child.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_readonly_on_child.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_readonly_on_child.html","name":"Initialize Readonly On Child","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Feb 2025 15:38:51 +0000","dateModified":"Thu, 20 Feb 2025 15:38:51 +0000","description":"Readonly properties could only be initialized in the same class as their definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_readonly_on_child.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Readonly properties could only be initialized in the same class as their definition. That holds true, whatever the visibility of the property: ``private``, ``protected``, ``private``.

In PHP 8.4, it is now possible to initialize the readonly properties from a child class, if the visibility allows. And the property is assigned only once.

.. image:: ../images/initialize_readonly_on_child.png

See Also
________

* `readonly (PHP manual) <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties>`_
* ` <>`_

