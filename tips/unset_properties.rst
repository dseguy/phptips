.. _unsetting-properties-surprises:

Unsetting Properties Surprises
------------------------------

	.. meta::
		:description lang=en:
			Unsetting Properties Surprises: Unsetting properties is always a surprise.

Unsetting properties is always a surprise.

First, if the property was typed, it yields a Fatal Error, as the property cannot be accessed before initialization. And, the unset destroyed the property.

Also, checking an unset property with property_exists() is done against the class definition, not the current object state.

.. image:: ../images/unset_properties.png

* `Double quoted <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`_


