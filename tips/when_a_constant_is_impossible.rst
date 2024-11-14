.. _constants-can-be-impossible:

Constants Can Be Impossible
---------------------------

.. meta::
	:description:
		Constants Can Be Impossible: In this code, the constant ``x2::F`` is not possible, because adding a string and an array will result in Fatal error.

In this code, the constant ``x2::F`` is not possible, because adding a string and an array will result in Fatal error.

Yet, this will be determined at execution time, and only if the constant is being used.

Since this constant is never used, its code is never executed, and it doesn't yield any error. PHP has optimized the error away.

.. image:: ../images/when_a_constant_is_impossible.png

* `Class Constants <https://www.php.net/manual/en/language.oop5.constants.php>`_


