.. _array_append()-and-short-assignation:

array_append() And Short Assignation
------------------------------------

	.. meta::
		:description lang=en:
			array_append() And Short Assignation: PHP allows using short assignation operators with the array append operators.

PHP allows using short assignation operators with the array append operators. This means that the code will add 2 to the array append. No error is displayed, except in the case of ``??=``, who is yield a Fatal error, with an explicit "Cannot use [] for reading".

In any case, all of those expressions make little sense : the short assignation operators shall exist on an existing value, not a new one. Here, it looks like the default value is null.

.. image:: ../images/array_append.png

* `Array (PHP manual) <https://www.php.net/manual/en/language.types.array.php#language.types.array>`_


