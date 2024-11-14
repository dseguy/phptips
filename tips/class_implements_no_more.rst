.. _class-implement-no-more:

Class Implement No More
-----------------------

.. meta::
	:description:
		Class Implement No More: Inheritance forces children classes to have only methods that are compatible with the parent's methods.

Inheritance forces children classes to have only methods that are compatible with the parent's methods.

The only exception is the constructor, which may have a totally different signature from generation to generation.

Interfaces apply the same constraints: their methods signature must be compatible with the host class. In this case, it also applies to the constructor.

So, in the case a parent class implements an interface with a constructor, and this class has a child class, the child may look compatible with the interface, and yet, be invalid at the constructor level.

Another good reason to avoid placing constructors in interfaces.

.. image:: ../images/class_implements_no_more.png

* `Object Interfaces (PHP manual) <https://www.php.net/manual/en/language.oop5.interfaces.php>`_


