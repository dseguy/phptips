.. _null-or-boolean-as-array:

null Or Boolean As Array
------------------------

.. meta::
	:description:
		null Or Boolean As Array: Null and booleans support the array syntax, but always return NULL as value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: null Or Boolean As Array
	:twitter:description: null Or Boolean As Array: Null and booleans support the array syntax, but always return NULL as value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/nullAsArray.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/nullAsArray.png
	:og:title: null Or Boolean As Array
	:og:type: article
	:og:description: Null and booleans support the array syntax, but always return NULL as value
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/nullAsArray.html
	:og:locale: en

Null and booleans support the array syntax, but always return NULL as value. Since PHP 7.4, they also report a warning, as this is not good code.

Arrays also report errors when the key type is not valid, such as another array or an object.

Interestingly, Null and boolean accept illegal keys, with a simple warning.

.. image:: ../images/nullAsArray.png

