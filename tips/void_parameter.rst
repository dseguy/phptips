.. _void-parameter-in-array_keys():

Void Parameter In array_keys()
------------------------------

	.. meta::
		:description lang=en:
			Void Parameter In array_keys(): There is a 'void' parameter in #PHP.

There is a 'void' parameter in #PHP. It is the second argument of array_keys().

That second parameter is often omitted (and unknown). 

If present, it is typed 'mixed' to allow any value to be searched (here, null). 



If absent, array_keys() returns ALL keys. When absent, it is not null, nor any other type. The last one possible is 'void' 

Type is then : void|mixed.

.. image:: ../images/void_parameter.png

* `Void (PHP manual) <https://www.php.net/manual/en/language.types.void.php>`_


