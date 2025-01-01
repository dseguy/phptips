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

It is possible to put 2 elements in a PHP array, find different 5 keys with array_key_exists or isset) and yet, still count 2 distinct elements (key wise).

The type-juggling for array keys is applied in every PHP features, to keep things easy to use.

This code is one rare way to show how it still leaks. Depending on the context, it might be very confusing.

.. image:: ../images/unexpected_keys.png

* `Arrays (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_


