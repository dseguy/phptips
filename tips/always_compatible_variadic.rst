.. _always-compatible-variadic:

Always Compatible Variadic
--------------------------

	.. meta::
		:description lang=en:
			Always Compatible Variadic: A variadic argument is a valid and compatible signature, for methods that overwrite other methods.

By `Sergii Shymko <https://twitter.com/SergiiShymko>`_

A variadic argument is a valid and compatible signature, for methods that overwrite other methods.

Method compatibility usually require the arguments to be the same, but with a variadic argument and also some of the arguments from the parent method, the signature is still considered compatible by PHP.

.. image:: ../images/always_compatible_variadic.png

* `Variable-length argument lists (PHP manual) <https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list>`_
* `Original Tweet <https://twitter.com/SergiiShymko/status/1744905838089961807>`_


