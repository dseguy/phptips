.. _constants-can-be-impossible:

Constants Can Be Impossible
---------------------------

.. meta::
	:description:
		Constants Can Be Impossible: In this code, the constant ``x2::F`` is not possible, because adding a string and an array will result in Fatal error.
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: Constants Can Be Impossible.
	:twitter:description: Constants Can Be Impossible: In this code, the constant ``x2::F`` is not possible, because adding a string and an array will result in Fatal error.
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/when_a_constant_is_impossible.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/when_a_constant_is_impossible.png.png.
	:og:image: Constants Can Be Impossible: In this code, the constant ``x2::F`` is not possible, because adding a string and an array will result in Fatal error.

In this code, the constant ``x2::F`` is not possible, because adding a string and an array will result in Fatal error.

Yet, this will be determined at execution time, and only if the constant is being used.

Since this constant is never used, its code is never executed, and it doesn't yield any error. PHP has optimized the error away.

.. image:: ../images/when_a_constant_is_impossible.png

* `Class Constants <https://www.php.net/manual/en/language.oop5.constants.php>`_


