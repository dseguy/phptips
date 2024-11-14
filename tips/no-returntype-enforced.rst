.. _no-returntype-enforced:

No Returntype Enforced
----------------------

.. meta::
	:description:
		No Returntype Enforced: A return type on a method means that the method must return something of that type.

A return type on a method means that the method must return something of that type. This is true, unless for generators. Such methods contains ``yield`` or ``yield from``, and must use the ``Generator`` returntype. Then, the actual return type is not checked, at all.

.. image:: ../images/no-returntype-enforced.png

* `Generator syntax (PHP manual) <https://www.php.net/manual/en/language.generators.syntax.php>`_


