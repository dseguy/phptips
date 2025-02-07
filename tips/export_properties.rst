.. _exporting-properties:

Exporting Properties
--------------------

.. meta::
	:description:
		Exporting Properties: With an accessor and a reference, it is possible to export a private property and manipulate it from the outside of the object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exporting Properties
	:twitter:description: Exporting Properties: With an accessor and a reference, it is possible to export a private property and manipulate it from the outside of the object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/export_properties.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/export_properties.png
	:og:title: Exporting Properties
	:og:type: article
	:og:description: With an accessor and a reference, it is possible to export a private property and manipulate it from the outside of the object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/export_properties.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/export_properties.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/export_properties.html","name":"Exporting Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 03 Nov 2024 09:22:36 +0000","dateModified":"Sun, 03 Nov 2024 09:22:36 +0000","description":"With an accessor and a reference, it is possible to export a private property and manipulate it from the outside of the object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/export_properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Tim Macdonald <https://twitter.com/timacdonald87>`_

With an accessor and a reference, it is possible to export a private property and manipulate it from the outside of the object.

This is not recommended, as it exposes data that is supposed to be protected by its visibility.

.. image:: ../images/export_properties.png

See Also
________

* `Original Tweet) <https://twitter.com/timacdonald87/status/1615886928943153153>`_

