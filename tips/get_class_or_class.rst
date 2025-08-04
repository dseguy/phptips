.. _get_class()-or-::class?:

get_class() Or ::class?
-----------------------

.. meta::
	:description:
		get_class() Or ::class?: Both ``get_class()`` and ``::class`` do the same: they report the name of the class of the provided object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_class() Or ::class?
	:twitter:description: get_class() Or ::class?: Both ``get_class()`` and ``::class`` do the same: they report the name of the class of the provided object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/get_class_or_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/get_class_or_class.png
	:og:title: get_class() Or ::class?
	:og:type: article
	:og:description: Both ``get_class()`` and ``::class`` do the same: they report the name of the class of the provided object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/get_class_or_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_class_or_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_class_or_class.html","name":"get_class() Or ::class?","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 04 Aug 2025 18:15:50 +0000","dateModified":"Mon, 04 Aug 2025 18:15:50 +0000","description":"Both ``get_class()`` and ``::class`` do the same: they report the name of the class of the provided object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_class_or_class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Both ``get_class()`` and ``::class`` do the same: they report the name of the class of the provided object. The nuances are in the details. 

``get_class()`` needs an object as argument, and emits a TypeError if not. ``::class`` works both on objects and class names. The latters are, basically, strings, so ``::class`` work on strings. 

``get_class()`` needs the class to be available, while ``::class`` merely formats the name of the class with the internal case: this works on an object, but not if the class name is hardcoded.

And who hard code its class names with strings?

.. image:: ../images/get_class_or_class.png

See Also
________

* `get_class (PHP manual) <https://www.php.net/manual/en/function.get-class.php>`_
* `::class <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class.class>`_
* `get_class() or ::class? <https://3v4l.org/OaCZ5>`_ [Try me]

