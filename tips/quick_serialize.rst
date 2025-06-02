.. _quick-serialize:

Quick Serialize
---------------

.. meta::
	:description:
		Quick Serialize: Did you know that ``get_object_vars()`` only returns the initialized parameters from your objects.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Quick Serialize
	:twitter:description: Quick Serialize: Did you know that ``get_object_vars()`` only returns the initialized parameters from your objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/quick_serialize.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/quick_serialize.png
	:og:title: Quick Serialize
	:og:type: article
	:og:description: Did you know that ``get_object_vars()`` only returns the initialized parameters from your objects
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/quick_serialize.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/quick_serialize.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/quick_serialize.html","name":"Quick Serialize","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 02 Jun 2025 18:18:52 +0000","dateModified":"Mon, 02 Jun 2025 18:18:52 +0000","description":"Did you know that ``get_object_vars()`` only returns the initialized parameters from your objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/quick_serialize.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Doeke Norg <https://twitter.com/doekenorg>`_

Did you know that ``get_object_vars()`` only returns the initialized parameters from your objects? This can be very useful when (un)serializing objects.

PS : accessing uninitialized properties leads to a Fatal error. This trick avoids it.

.. image:: ../images/quick_serialize.png

See Also
________

* `Original <https://twitter.com/doekenorg/status/1706624773646594134>`_
* `get_object_vars() <https://www.php.net/get_object_vars>`_
* `initialized properties <https://3v4l.org/Dr6YT>`_ [Try me]

