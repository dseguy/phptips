.. _strict_types-exceptions:

strict_types Exceptions
-----------------------

.. meta::
	:description:
		strict_types Exceptions: strict_types do not apply to PHP operators, only on to typed structures.

strict_types do not apply to PHP operators, only on to typed structures.

Here, concatenation and interpolation all call __toString(), but not foo().

As you can see, print() and echo() are safe too, while implode() is not: actually, it is not safe for the first argument, but still OK with the elements of the array, in the second argument.

.. image:: ../images/strict_types_exceptions.png

* `live code <https://3v4l.org/R6XVR>`_
* `declare <https://www.php.net/manual/en/control-structures.declare.php>`_


