.. _float-precision:

Float Precision
---------------

.. meta::
	:description:
		Float Precision: PHP has a 'precision' directive that controls the number of decimals displayed by float values.
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: Float Precision.
	:twitter:description: Float Precision: PHP has a 'precision' directive that controls the number of decimals displayed by float values.
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/precision.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/precision.png.png.
	:og:image: Float Precision: PHP has a 'precision' directive that controls the number of decimals displayed by float values.

PHP has a 'precision' directive that controls the number of decimals displayed by float values. This is used with echo (and co), but also with cast to string. 

It default to 14, and peaks at 18, and gives up at 54. Use gmp for large numbers. 

When changing it, don't forget to reset it to default, unless you like to puzzle people.

.. image:: ../images/precision.png

* `precision (PHP manual) <https://www.php.net/manual/en/ini.core.php#ini.precision>`_


