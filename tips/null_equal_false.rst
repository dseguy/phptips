.. _null-does-not-always-equal-false:

null Does Not Always Equal false
--------------------------------

	.. meta::
		:description lang=en:
			null Does Not Always Equal false: null equals false, so the first equality is actually true.

null equals false, so the first equality is actually true.

On the other hand, using null and false as keys in an array, lead them to be cast to string: they end up being different, and that allows two elements to be stored in the array.

.. image:: ../images/null_equal_false.png



