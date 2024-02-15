.. _typed-by-enum:

Typed By Enum
-------------

	.. meta::
		:description lang=en:
			Typed By Enum: Enumeration cannot be instantiated into an object.

Enumeration cannot be instantiated into an object. In fact, the cases of the enumeration are the objects. Hence, a case object has the enumeration type.

Then, an enumeration (class) constant cannot be confused with a case, because the enumeration cannot be instantiated, and class constants also do not support new initializers.

.. image:: ../images/typed_by_enum.png

* `Enumeration (PHP manual) <https://www.php.net/manual/en/language.types.enumerations.php>`_


