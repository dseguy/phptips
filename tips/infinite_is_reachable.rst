.. _php-infinity-is-reachable:

PHP Infinity Is Reachable
-------------------------

.. meta::
	:description:
		PHP Infinity Is Reachable: Infinite values are sometimes provided by PHP functions, such as log(0) or exp(PHP_INT_MAX).

By `Frederic Bouchery <https://twitter.com/FredBouchery>`_

Infinite values are sometimes provided by PHP functions, such as log(0) or exp(PHP_INT_MAX). In that case, beware and do not compare it directly with an integer as a positive is considered bigger than infinite.

.. image:: ../images/infinite_is_reachable.png

* `is_infinite() (PHP manual) <https://www.php.net/is_infinite>`_


