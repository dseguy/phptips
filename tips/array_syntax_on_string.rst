.. _modify-string-with-array-syntax:

Modify String With Array Syntax
-------------------------------

	.. meta::
		:description lang=en:
			Modify String With Array Syntax: PHP strings allows access to individiual characters using the array syntax: ``$string[$index]``.

PHP strings allows access to individiual characters using the array syntax: ``$string[$index]``.

It is also possible to modify the string with the same syntax: the index have to be integers.

The positive integers are offsets, starting at zero. Any missing characters between the end of the string and the requested index is set to space ``' '``. Negative index are also valid, starting from the end of the string.

Here, ``$a[1]`` is just after the end of the string, ``$a[10]`` is well beyond the end of the string, and ``$a[-9]`` is almost back to the beginning of the string.

.. image:: ../images/array_syntax_on_string.png

* `Strings (PHP manual) <https://www.php.net/manual/en/language.types.string.php>`_


