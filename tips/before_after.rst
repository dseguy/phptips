.. _before-or-after:

Before Or After
---------------

	.. meta::
		:description lang=en:
			Before Or After: PHP takes the opportunity to validate everything it can when it is handy, and leave the rest to execution time.

PHP takes the opportunity to validate everything it can when it is handy, and leave the rest to execution time. In the code below, the first class has no error reported, because it is linted before the parent class. The last class displays an error because it appears after the definition of the parent, and PHP can lazily check it.

The validation of the first class will be more thorough at execution time, and yield the error then.

.. image:: ../images/before_after.png



