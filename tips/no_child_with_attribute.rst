.. _child-of-attribute-is-not-an-attribute:

Child Of Attribute Is Not An Attribute
--------------------------------------

.. meta::
	:description:
		Child Of Attribute Is Not An Attribute: A class attribute must be marked with an attribute called ``Attribute``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Child Of Attribute Is Not An Attribute
	:twitter:description: Child Of Attribute Is Not An Attribute: A class attribute must be marked with an attribute called ``Attribute``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/no_child_with_attribute.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/no_child_with_attribute.png
	:og:title: Child Of Attribute Is Not An Attribute
	:og:type: article
	:og:description: A class attribute must be marked with an attribute called ``Attribute``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/no_child_with_attribute.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_child_with_attribute.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_child_with_attribute.html","name":"Child Of Attribute Is Not An Attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 04:56:17 +0000","dateModified":"Fri, 04 Jul 2025 04:56:17 +0000","description":"A class attribute must be marked with an attribute called ``Attribute``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_child_with_attribute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/no_child_with_attribute.png

A class attribute must be marked with an attribute called ``Attribute``. It is compulsory to use Reflection and obtain an instance of the attribute.

That attribute is only for the class itself, and it doesn't propagate automatically to the child classes.

On the other hand, the ``Attribute`` class cannot be extended: it is not possible to create a child that may carry some of the ``Attribute`` properties.

See Also
________

* `Attributes Overview (PHP manual) <https://www.php.net/manual/en/language.attributes.overview.php>`_
* `attribute is not for children <https://3v4l.org/tDOsd>`_ [Try me]


PHP Features
____________

* `reflection <https://php-dictionary.readthedocs.io/en/latest/dictionary/reflection.ini.html>`_

* `attribute <https://php-dictionary.readthedocs.io/en/latest/dictionary/attribute.ini.html>`_

* `inheritance <https://php-dictionary.readthedocs.io/en/latest/dictionary/inheritance.ini.html>`_


