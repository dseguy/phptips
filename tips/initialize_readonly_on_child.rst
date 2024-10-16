.. _initialize-readonly-on-child:

Initialize Readonly On Child
----------------------------

	.. meta::
		:description lang=en:
			Initialize Readonly On Child: Readonly properties could only be initialized in the same class as their definition.

Readonly properties could only be initialized in the same class as their definition. That hold true, whatever the visibility of the property: ``private``, ``protected``, ``private``.

In PHP 8.4, it is now possible to initialize these properties from a child class.

.. image:: ../images/initialize_readonly_on_child.png

* `readonly (PHP manual) <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties>`_


