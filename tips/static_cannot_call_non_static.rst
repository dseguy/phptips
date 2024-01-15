.. _a-static-method-cannot-call-a-non-static-method:

A Static Method Cannot Call A Non Static Method
-----------------------------------------------

It is known that a non-static method can call a static method. It is less known that a static method cannot call a non-static method, even if the static syntax is possible.

A non-static method needs a value for ``$this``, which a static call doesn't provide.

.. image:: ../images/static_cannot_call_non_static.png



