.. _no-returntype-but-still,-only-string:

No Returntype But Still, Only String
------------------------------------

	.. meta::
		:description lang=en:
			No Returntype But Still, Only String: Without a return type (or mixed), a method may return any type of data.

By `Fred Bouchery <https://twitter.com/FredBouchery>`_

Without a return type (or mixed), a method may return any type of data. This is not the case for the magic method ``__toString``, as it really should return a string. So, even without a return type, it complains about the type.

That trick requires ``strict_types`` though.

.. image:: ../images/no-type-but-string.png

* `Magic methods (PHP manual) <https://www.php.net/manual/en/language.oop5.magic.php>`_
* `Declare <https://www.php.net/manual/en/control-structures.declare.php>`_


