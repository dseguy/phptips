.. _keys-are-integers-whenever-possible:

Keys Are Integers Whenever Possible
-----------------------------------

	.. meta::
		:description lang=en:
			Keys Are Integers Whenever Possible: Array keys are only strings or integers: the later has priority.

Array keys are only strings or integers: the later has priority. So, when storing a string that can be converted to an integer, PHP will do the conversion.

In the case displayed, the keys are French Zip code, which might start with the leading 0. But PHP will convert it into integer, and drop that leading 0. The value is still correctly indexed, but now, the string representation has changed.

.. image:: ../images/keys_are_integers.png

* `Array: syntax (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_


