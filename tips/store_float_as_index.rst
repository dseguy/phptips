.. _store-float-as-index:

Store Float As Index
--------------------

.. meta::
	:description:
		Store Float As Index: With PHP, floats cannot be used directly as array indexes because array keys must be either integers or strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Store Float As Index
	:twitter:description: Store Float As Index: With PHP, floats cannot be used directly as array indexes because array keys must be either integers or strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/store_float_as_index.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/store_float_as_index.png
	:og:title: Store Float As Index
	:og:type: article
	:og:description: With PHP, floats cannot be used directly as array indexes because array keys must be either integers or strings
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/store_float_as_index.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/store_float_as_index.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/store_float_as_index.html","name":"Store Float As Index","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 25 Jun 2025 20:27:31 +0000","dateModified":"Wed, 25 Jun 2025 20:27:31 +0000","description":"With PHP, floats cannot be used directly as array indexes because array keys must be either integers or strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/store_float_as_index.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

With PHP, floats cannot be used directly as array indexes because array keys must be either integers or strings. If you attempt to use a float as an index, PHP will automatically cast it to an integer, potentially causing unexpected behavior. However, you can explicitly cast the float to a string to preserve its precision as an index. Later, due to PHP's type juggling, you can still perform arithmetic with it seamlessly.

.. image:: ../images/store_float_as_index.png

See Also
________

* `Storing float as keys <https://3v4l.org/dvHg8>`_ [Try me]

