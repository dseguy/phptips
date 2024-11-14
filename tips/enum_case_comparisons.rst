.. _enumeration's-cases-comparisons:

Enumeration's Cases Comparisons
-------------------------------

.. meta::
	:description:
		Enumeration's Cases Comparisons: Enumeration cases are different when the enumeration are different, not when the value of the case is different.

By `Frederic Bouchery <https://twitter.com/FredBouchery>`_

Enumeration cases are different when the enumeration are different, not when the value of the case is different. It is a difference with using constants for enumerations.

To compare their value, the comparison must be done with the 'value' property, not the object.

.. image:: ../images/enum_case_comparisons.png

* `Backed enumeration (PHP manual) <https://www.php.net/manual/en/language.enumerations.backed.php>`_


