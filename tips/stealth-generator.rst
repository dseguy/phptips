.. _stealth-generator:

Stealth Generator
-----------------

	.. meta::
		:description lang=en:
			Stealth Generator: The code below has a useless loop.

By `Frederic Bouchery <https://twitter.com/FredBouchery>`_

The code below has a useless loop. The presence of the ``yield`` keyword in the function body makes it a generator. As such, foreach() will react to ``yield`` calls, though the function returns immediately, without a ``yield``. Hence, the empty loop, even though the function returns an array: indeed, to have the function behave as expected, it is necessary to remove the unreachable ``yield`` call, and then, the foreach() can use the return for the loop.

.. image:: ../images/stealth-generator.png

* `Generator syntax <https://www.php.net/manual/en/language.generators.syntax.php>`_


