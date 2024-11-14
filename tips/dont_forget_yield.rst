.. _don't-forget-to-yield:

Don't Forget To Yield
---------------------

.. meta::
	:description:
		Don't Forget To Yield: It is possible to delegate a generator to another generator.

It is possible to delegate a generator to another generator.

Just don't call them raw, as nothing will happen.

And don't forget the 'from' part of the keyword, otherwise, it will yield the generator, instead of running it.

.. image:: ../images/dont_forget_yield.png

* `Generator syntax <https://www.php.net/manual/en/language.generators.syntax.php>`_


