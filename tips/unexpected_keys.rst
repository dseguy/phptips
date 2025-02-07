.. _unexpected-keys-in-array:

Unexpected keys in array
------------------------

.. meta::
	:description:
		Unexpected keys in array: It is possible to put 2 elements in a PHP array, find different 5 keys with array_key_exists or isset) and yet, still count 2 distinct elements (key wise).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unexpected keys in array
	:twitter:description: Unexpected keys in array: It is possible to put 2 elements in a PHP array, find different 5 keys with array_key_exists or isset) and yet, still count 2 distinct elements (key wise)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/unexpected_keys.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/unexpected_keys.png
	:og:title: Unexpected keys in array
	:og:type: article
	:og:description: It is possible to put 2 elements in a PHP array, find different 5 keys with array_key_exists or isset) and yet, still count 2 distinct elements (key wise)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unexpected_keys.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unexpected_keys.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unexpected_keys.html","name":"Unexpected keys in array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 14 Mar 2024 20:40:04 +0000","dateModified":"Thu, 14 Mar 2024 20:40:04 +0000","description":"It is possible to put 2 elements in a PHP array, find different 5 keys with array_key_exists or isset) and yet, still count 2 distinct elements (key wise)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unexpected_keys.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

It is possible to put 2 elements in a PHP array, find different 5 keys with array_key_exists or isset) and yet, still count 2 distinct elements (key wise).

The type-juggling for array keys is applied in every PHP features, to keep things easy to use.

This code is one rare way to show how it still leaks. Depending on the context, it might be very confusing.

.. image:: ../images/unexpected_keys.png

See Also
________

* `Arrays (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_

