.. _no-force-object-to-string:

No Force Object To String
-------------------------

.. meta::
	:description:
		No Force Object To String: PHP forces numeric strings to integers when using them as a index, in an array.
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: No Force Object To String.
	:twitter:description: No Force Object To String: PHP forces numeric strings to integers when using them as a index, in an array.
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/no_force_object_to_string.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/no_force_object_to_string.png.png.
	:og:image: No Force Object To String: PHP forces numeric strings to integers when using them as a index, in an array.

PHP forces numeric strings to integers when using them as a index, in an array. On the other hand, it doesn't force objects to be strings, and it rather raise an error: ``Illegal offset type``.

.. image:: ../images/no_force_object_to_string.png

* `Arrays (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_


