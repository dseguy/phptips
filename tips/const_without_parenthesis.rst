.. _const-without-parenthesis:

Const Without Parenthesis
-------------------------

	.. meta::
		:description lang=en:
			Const Without Parenthesis: It is possible to put a single literal inside parenthesis: that's just the literal itself.

It is possible to put a single literal inside parenthesis: that's just the literal itself.

It is possible to put a single global constant inside parenthesis: that's just the global constant itself.

It is possible to create a constant called ``int``, because the name is not protected against usage, even if it is reserved for type and casting.

Then, it is not possible to ``int`` in parenthesis, because PHP confuses it with a cast.

.. image:: ../images/const_without_parenthesis.png

* `Type Operators (PHP manual) <https://www.php.net/manual/en/language.operators.type.php>`_


