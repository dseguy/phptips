.. _casting-and-power:

Casting And Power
-----------------

	.. meta::
		:description lang=en:
			Casting And Power: When you know that 2*2 = 4, and 2**2 = 4 (too), and 2.

When you know that 2*2 = 4, and 2**2 = 4 (too), and 2.5 ** 2.5 = 9.8821176880262, have to ask yourself where is this 6 coming from. 

The answer is in the precedence. Casting has higher precedence than multiplication, so cast is done first (2.5 -> 2) then multiplication. This gives the first 4. 

Then, power, ``**``, as higher precedence than casting, so the second expression gives first 2.5 ** 2, which is 6.25, and then, cast it again as an integer, hence 6.

It's a good thing that power is so little used.

.. image:: ../images/cast_and_power.png

* `Operator Precedence (PHP manual) <https://www.php.net/manual/en/language.operators.precedence.php>`_


