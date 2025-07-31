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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_readonly_on_child.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_readonly_on_child.html","name":"Initialize Readonly On Child","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 31 Jul 2025 06:58:50 +0000","dateModified":"Thu, 31 Jul 2025 06:58:50 +0000","description":"Readonly properties could only be initialized in the same class as their definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_readonly_on_child.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Readonly properties could only be initialized in the same class as their definition. That holds true, whatever the visibility of the property: ``private``, ``protected``, ``private``.

In PHP 8.4, it is now possible to initialize the readonly properties from a child class, if the visibility allows. And the property is assigned only once.

.. image:: ../images/initialize_readonly_on_child.png

See Also
________

* `Initialize Readonly On Child <https://3v4l.org/WtXbB>`_ [Try me]


PHP Error Messages
__________________

* `Typed property %s::$%s must not be accessed before initialization <https://php-errors.readthedocs.io/en/latest/messages/typed-property-%25s%3A%3A%24%25s-must-not-be-accessed-before-initialization.html>`_


