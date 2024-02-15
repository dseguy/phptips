.. _battle-of-definition:

Battle Of Definition
--------------------

	.. meta::
		:description lang=en:
			Battle Of Definition: Methods signatures must be compatible with the parent class's definition.

Methods signatures must be compatible with the parent class's definition. This is true, except for __construct(), for which the compatibility is not checked.

Yet, compatibility is still enforced when the __construct definition is in an interface.

.. image:: ../images/battle_of_definitions.png

* `Void (PHP manual) <https://www.php.net/manual/en/language.types.void.php>`_
* `3v4l : __construct() signature enforced when in an interface <https://3v4l.org/QPaRG>`_


