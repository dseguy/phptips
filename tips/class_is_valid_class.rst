.. _class-is-a-valid-type:

Class Is A Valid Type
---------------------

.. meta::
	:description:
		Class Is A Valid Type: PHP allows to use ``\class`` as a class name in a type.

PHP allows to use ``\class`` as a class name in a type. This is also the case for interfaces, enums, traits... and it is also valid for some others keywords.

On the other hand, a good number of PHP keywords are forbidden, and yield an error : ``\self`` is an invalid class name.

Of course, once this is typed like that, it is not possible to satisfy the type specification, and such code is actually not usable.

.. image:: ../images/class_is_valid_class.png



