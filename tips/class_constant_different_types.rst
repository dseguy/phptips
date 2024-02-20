.. _class-constants-with-different-types:

Class Constants With Different Types
------------------------------------

	.. meta::
		:description lang=en:
			Class Constants With Different Types: With #PHP, it is possible to have a class constant with different values, between a parent class, and its child class.

With #PHP, it is possible to have a class constant with different values, between a parent class, and its child class.

Quizz of the day : can you make a class constant with different types ? Optionally different values.

Works on #PHP 8.3. Application unknown.

The trick is to use union types, which allows adding new valid types without ascendant compatibility. 

.. image:: ../images/class_constant_different_types.png

* `Void (PHP manual) <https://www.php.net/manual/en/language.types.void.php>`_


