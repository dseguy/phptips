.. _not-all-strings-in-arrays:

Not All Strings In Arrays
-------------------------

	.. meta::
		:description lang=en:
			Not All Strings In Arrays: Array keys are coerced into strings or integers, while array values are left intact.

Array keys are coerced into strings or integers, while array values are left intact.

Yet, this doesn't apply to array keys, so this code will display an 'Uncaught TypeError: Illegal offset type', even without strict_types.

This code needs an explicit cast to string to work.

.. image:: ../images/not_all_strings.png

* `Array: syntax (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_
* `__toString() Magic Method <https://www.php.net/manual/fr/language.oop5.magic.php#object.tostring>`_


