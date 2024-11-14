.. _promoted-properties-compatibility:

Promoted Properties Compatibility
---------------------------------

.. meta::
	:description:
		Promoted Properties Compatibility: Promoted properties are defined in a constructor signature.

Promoted properties are defined in a constructor signature. They cannot be defined in an abstract method, so they are not allowed in an abstract constructor: this is true in an abstract class and in an interface.

On the other hand, it is allowed to extend promoted properties without the promotion, and vice versa.

.. image:: ../images/promoted_compatibility.png

* `Class Abstract (PHP manual) <https://www.php.net/manual/en/language.oop5.abstract.php>`_


