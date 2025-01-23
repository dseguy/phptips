.. _object-is-not-a-type:

Object Is Not A Type
--------------------

.. meta::
	:description:
		Object Is Not A Type: Such situations always make me smile, yet I am certain several of us will loose time on such a mistake.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object Is Not A Type
	:twitter:description: Object Is Not A Type: Such situations always make me smile, yet I am certain several of us will loose time on such a mistake
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/object_is_not_a_type.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/object_is_not_a_type.png
	:og:title: Object Is Not A Type
	:og:type: article
	:og:description: Such situations always make me smile, yet I am certain several of us will loose time on such a mistake
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/object_is_not_a_type.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/object_is_not_a_type.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/object_is_not_a_type.html","name":"Object Is Not A Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jan 2025 17:35:01 +0000","dateModified":"Fri, 03 Jan 2025 17:35:01 +0000","description":"Such situations always make me smile, yet I am certain several of us will loose time on such a mistake","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/object_is_not_a_type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Such situations always make me smile, yet I am certain several of us will loose time on such a mistake. ``object`` is a type that can be used with argument, returntypes and properties, but not with ``instanceof``. It is a bit more obvious with integer or string in the ``instanceof``.

.. image:: ../images/object_is_not_a_type.png

* `Type Operators (PHP manual) <https://www.php.net/manual/en/language.operators.type.php>`_


