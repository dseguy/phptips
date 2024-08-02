.. _compatible-only-interface:

Compatible Only Interface
-------------------------

	.. meta::
		:description lang=en:
			Compatible Only Interface: Interfaces are contracts that defines methods signatures, which implmenting class have to implements.

Interfaces are contracts that defines methods signatures, which implmenting class have to implements.

One lesser known fact is that the implementation only has to be compatible with the interface, there is no need to be identical. It is the same behavior than in class inheritence.

This explains that the following code is valid, both with argument contra-variance and return type variance.

Note that the names of the parameters are completely free to be changed at will, yet it is not recommended.

.. image:: ../images/compatible_interface.png

* `Object Interfaces (PHP manual) <https://www.php.net/manual/en/language.oop5.interfaces.php>`_
* `Example code on 3v4l.org (VhsoJ) <https://3v4l.org/VhsoJ>`_


