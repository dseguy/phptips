.. _every-anonymous-class-is-different:

Every Anonymous Class Is Different
----------------------------------

.. meta::
	:description:
		Every Anonymous Class Is Different: Anonymous classes don't have an explicit name, yet PHP uses one internally.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Every Anonymous Class Is Different
	:twitter:description: Every Anonymous Class Is Different: Anonymous classes don't have an explicit name, yet PHP uses one internally
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/every_anonymous_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/every_anonymous_class.png
	:og:title: Every Anonymous Class Is Different
	:og:type: article
	:og:description: Anonymous classes don't have an explicit name, yet PHP uses one internally
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/every_anonymous_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/every_anonymous_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/every_anonymous_class.html","name":"Every Anonymous Class Is Different","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 26 Nov 2024 21:52:23 +0000","dateModified":"Tue, 26 Nov 2024 21:52:23 +0000","description":"Anonymous classes don't have an explicit name, yet PHP uses one internally","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/every_anonymous_class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Anonymous classes don't have an explicit name, yet PHP uses one internally. That name is build on top of the localisation of the class definition in the code.

This means that two anonymous class objects (sic), created with the same code, but at different places in the code, are considered of a different type by PHP.

On the other hand, when the same piece of code produces the anonymous class object, it is considered of the same class.

Note that the syntax ``foo() instanceof $x`` is valid, but ``$x instanceof foo()`` is not. The second operand of ``instanceof`` is a bit precious, and forbid many expressions: this is the case of a simple assignation.

.. image:: ../images/every_anonymous_class.png

See Also
________

* `instanceof (PHP manual) <https://www.php.net/manual/en/language.operators.type.php>`_

