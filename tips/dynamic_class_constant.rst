.. _dynamic-class-constant:

Dynamic Class Constant
----------------------

.. meta::
	:description:
		Dynamic Class Constant: It is not allowed to create dynamically a class constant.

It is not allowed to create dynamically a class constant. The only way is to create a global constant, using the define() function.

So, when there is a need for a dynamically created constant, the trick is to assign the class constant a global constant's value, and then, create the global constant.

Of course, it is not possible to use that class constant until the global constant has been actually created.

.. image:: ../images/dynamic_class_constant.png

* `Define() (PHP manual) <https://www.php.net/manual/en/function.define.php>`_


