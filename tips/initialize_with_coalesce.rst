.. _only-initialize-with-short-assignation-coalesce:

Only Initialize With Short Assignation Coalesce
-----------------------------------------------

.. meta::
	:description:
		Only Initialize With Short Assignation Coalesce: It is not possible to access a property before its initialisation.

It is not possible to access a property before its initialisation. This is true to both static and normal properties.

While normal properties are initialized at constructor time, static properties might require a check before assignation : in case the property has not been yet assigned, a Fatal error will stop the code execution.

In fact, there is a way : it is the short assignation with coalesce, which will accept to check the NULL value, and only fill it if it is null.

.. image:: ../images/initialize_with_coalesce.png

* `Properties <https://www.php.net/manual/en/language.oop5.properties.php>`_


