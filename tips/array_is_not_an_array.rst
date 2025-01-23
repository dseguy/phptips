.. _array-is-not-an-array:

array Is Not An Array
---------------------

.. meta::
	:description:
		array Is Not An Array: PHP native types, such as the scalar ``int`` cannot be specified with a leading ``\``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array Is Not An Array
	:twitter:description: array Is Not An Array: PHP native types, such as the scalar ``int`` cannot be specified with a leading ``\``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/array_is_not_an_array.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/array_is_not_an_array.png
	:og:title: array Is Not An Array
	:og:type: article
	:og:description: PHP native types, such as the scalar ``int`` cannot be specified with a leading ``\``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_is_not_an_array.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_is_not_an_array.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_is_not_an_array.html","name":"array Is Not An Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 28 Oct 2024 21:33:43 +0000","dateModified":"Mon, 28 Oct 2024 21:33:43 +0000","description":"PHP native types, such as the scalar ``int`` cannot be specified with a leading ``\\``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_is_not_an_array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP native types, such as the scalar ``int`` cannot be specified with a leading ``\``. Such code get hit with a ``Type declaration ‘\int’ must be unqualified``.

This is the case for all of the PHP native types, except for ``array``, and ``iterable``.

That error message is really hilarious.

.. image:: ../images/array_is_not_an_array.png

* `Type declaration ‘%s’ must be unqualified <https://php-errors.readthedocs.io/en/latest/messages/type-declaration-%27%25s%27-must-be-unqualified.html>`_


