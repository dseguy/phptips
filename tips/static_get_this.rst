.. _get-$this-in-a-static:

Get $this In A Static
---------------------

	.. meta::
		:description lang=en:
			Get $this In A Static: A static method does not have access to the current object, by definition.

A static method does not have access to the current object, by definition. 



It is also possible to call statically any method within a class. 



But when a static method calls a non-static method, an error is produced:  Non-static ``method x::foo()`` cannot be called statically.



Finally, calling statically a non-static method still defines ``$this`` in the target method. Static is the nature of the method, not the call.

.. image:: ../images/static_get_this.png

* `Static Keyword (PHP manual) <https://www.php.net/manual/en/language.oop5.static.php>`_


