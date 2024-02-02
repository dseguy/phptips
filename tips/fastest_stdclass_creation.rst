.. _fast-creation-of-stdclass-objects:

Fast Creation Of stdClass Objects
---------------------------------

The fastest way to create a stdClass object is to create an array, and then cast it to stdClass with the (array) operator. It is still faster even if the array is build peacemal (2 times slower).

Setting directly properties on the stdClass object is then about 3 times slower, and creating a class extension with an adapted __construc method is then 4 times slower.

In the end, this is a micro optimisation.

.. image:: ../images/fastest_stdclass_creation.png

* `Converting to an object (PHP manual) <https://www.php.net/manual/en/language.types.object.php#language.types.object.casting>`_


