.. _no-cast-in-constant-expressions:

No Cast In Constant Expressions
-------------------------------

	.. meta::
		:description lang=en:
			No Cast In Constant Expressions: Constant expressions do not accept the cast operator.

Constant expressions do not accept the cast operator.

Constant expressions are expressions defining constants and default values. They allow a subset of PHP features, as they are avaiable before the execution phase. For example, they accept operators, such as addition and concatenation. Yet, they do not accept the cast operators, even though they might be emulated in another way. Here, the + operator creates the integer, from another string.

.. image:: ../images/no_cast_in_constant_expression.png

* `Class constants (PHP manual) <https://www.php.net/manual/en/language.oop5.constants.php>`_


