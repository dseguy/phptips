.. _deanonymize-class:

Deanonymize Class
-----------------

	.. meta::
		:description lang=en:
			Deanonymize Class: Anonymize class are classes without a name.

Anonymize class are classes without a name. That way, it provides directly an object, but doesn't litter the namespace with an extra class name. 

Later, if the code needs a second object of the same 'class', it has to go through the same code. 

Or, it is possible to get access to the 'hidden' definition of the class within PHP, by simply creating a class alias to this class. Then, it can be used anywhere else.

.. image:: ../images/deanonymize-class.png

* `Anonymous Classes (PHP manual) <https://www.php.net/manual/en/language.oop5.anonymous.php>`_


