.. _extra-class:

Extra ::class
-------------

.. meta::
	:description:
		Extra ::class: It is possible to use ``::class`` when reaching for static elements with the ``::`` operator: the ``::class`` returns the full name of the class, which is later used to look for the static.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Extra ::class
	:twitter:description: Extra ::class: It is possible to use ``::class`` when reaching for static elements with the ``::`` operator: the ``::class`` returns the full name of the class, which is later used to look for the static
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/extra_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/extra_class.png
	:og:title: Extra ::class
	:og:type: article
	:og:description: It is possible to use ``::class`` when reaching for static elements with the ``::`` operator: the ``::class`` returns the full name of the class, which is later used to look for the static
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/extra_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/extra_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/extra_class.html","name":"Extra ::class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:18:34 +0000","dateModified":"Mon, 29 Jun 2026 09:18:34 +0000","description":"It is possible to use ``::class`` when reaching for static elements with the ``::`` operator: the ``::class`` returns the full name of the class, which is later used to look for the static","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/extra_class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/extra_class.png

It is possible to use ``::class`` when reaching for static elements with the ``::`` operator: the ``::class`` returns the full name of the class, which is later used to look for the static. In the end, it does not add anything to the syntax and may be dropped.

Make sure to differentiate the initial name of in the syntax, which is a identifier: it is not confused by PHP with a constant of the same name. On the other hand, after a ``::`` operator, ``::class`` cannot be used on a string and it must be used on another object.

See Also
________

* `Some code structures are... very creative! <https://x.com/rectorphp/status/2071247626238853603>`_
* `A::class <https://3v4l.org/QdZ5J#v8.5.7>`_ [Try me]


PHP Features
____________

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `scope-resolution-operator <https://php-dictionary.readthedocs.io/en/latest/dictionary/scope-resolution-operator.ini.html>`_


