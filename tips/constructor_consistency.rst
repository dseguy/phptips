.. _strict_types-exceptions:

strict_types Exceptions
-----------------------

strict_types do not apply to PHP operators, only on to typed structures. 

Here, concatenation and interpolation all call __toString(), but not foo(). 

As you can see, print() and echo() are safe too, while implode() is not. 

.. image:: ../images/constructor_consistency.png

* `declare (PHP manual) <https://www.php.net/manual/en/control-structures.declare.php>`_


