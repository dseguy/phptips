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
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/store_float_as_index.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/store_float_as_index.png
	:og:title: Store Float As Index
	:og:type: article
	:og:description: PHP doesn't allow float as index in arrays
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/store_float_as_index.html
	:og:locale: en

PHP doesn't allow float as index in arrays.

It is possible to use them as such by casting them to string. Later, type juggling will allow adding to another float, seamlessly.

.. image:: ../images/store_float_as_index.png



