.. _lots-of-silly-arguments:

Lots Of Silly Arguments
-----------------------

	.. meta::
		:description lang=en:
			Lots Of Silly Arguments: PHP 8.

By `Greg Korba <https://twitter.com/_Codito_>`_

PHP 8.4 drops the requirement of parenthesis around the new operator: it is possible to directly call a method on it.

Then, it is also possible to use an object as a method, by creating the __invoke() magic method. In this case, it returns a new instance of the class.

Finally, it is possible to call a function whose name is the result of a previous call.

The final result is quite impressive.

.. image:: ../images/self_invoking.png

* `__invoke() (PHP manual) <https://www.php.net/manual/en/language.oop5.magic.php#object.invoke>`_


