.. _store-float-as-index:

Store Float As Index
--------------------

.. meta::
	:description:
		Store Float As Index: PHP doesn't allow float as index in arrays.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Store Float As Index
	:twitter:description: Store Float As Index: PHP doesn't allow float as index in arrays
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/store_float_as_index.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/store_float_as_index.png
	:og:title: Store Float As Index
	:og:type: article
	:og:description: PHP doesn't allow float as index in arrays
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/store_float_as_index.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/store_float_as_index.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/store_float_as_index.html","name":"Store Float As Index","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 12 May 2025 04:33:14 +0000","dateModified":"Mon, 12 May 2025 04:33:14 +0000","description":"PHP doesn't allow float as index in arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/store_float_as_index.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP doesn't allow float as index in arrays.

It is possible to use them as such by casting them to string. Later, type juggling will allow adding to another float, seamlessly.

.. image:: ../images/store_float_as_index.png

See Also
________

* `Storing float as keys <https://3v4l.org/dvHg8>`_


PHP Error Messages
__________________


