.. _quick-dto-or-vo-copy:

Quick DTO Or VO Copy
--------------------

.. meta::
	:description:
		Quick DTO Or VO Copy: A small PHP trick, combining named parameters, spread and union arrays operators to "easily" create a modified copy of a DTO: https://3v4l.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Quick DTO Or VO Copy
	:twitter:description: Quick DTO Or VO Copy: A small PHP trick, combining named parameters, spread and union arrays operators to "easily" create a modified copy of a DTO: https://3v4l
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/quick-dto.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/quick-dto.png
	:og:title: Quick DTO Or VO Copy
	:og:type: article
	:og:description: A small PHP trick, combining named parameters, spread and union arrays operators to "easily" create a modified copy of a DTO: https://3v4l
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/quick-dto.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/quick-dto.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/quick-dto.html","name":"Quick DTO Or VO Copy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 02 Jun 2025 18:21:40 +0000","dateModified":"Mon, 02 Jun 2025 18:21:40 +0000","description":"A small PHP trick, combining named parameters, spread and union arrays operators to \"easily\" create a modified copy of a DTO: https:\/\/3v4l","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/quick-dto.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Benoit Viguier <https://phpc.social/@b_viguier>`_

A small PHP trick, combining named parameters, spread and union arrays operators to "easily" create a modified copy of a DTO: https://3v4l.org/ZWX5G#v8.2.10

It’s fun if you have a lot of parameters, but using a string containing the parameter’s name isn’t really satisfactory

It is possible to extend this syntax to PHP 8.0+ with a clever array_values() / array_merge(): https://3v4l.org/igrsW

``$copy = new DTO(...(array_values(array_merge(get_object_vars($dto), ['d' => 43]))));``

Now, this extended syntax is an easy prey to property definition order, constructor argument order, and temporary property deletion, unlike your original approach.

.. image:: ../images/quick-dto.png

See Also
________

* `Function arguments <https://www.php.net/manual/en/functions.arguments.php>`_
* `initialize DTO <https://3v4l.org/dvtO4>`_ [Try me]

