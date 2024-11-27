.. _php-infinity-is-reachable:

PHP Infinity Is Reachable
-------------------------

.. meta::
	:description:
		PHP Infinity Is Reachable: Infinite values are sometimes returned by PHP functions, such as ``log(0)`` or ``exp(PHP_INT_MAX)``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Infinity Is Reachable
	:twitter:description: PHP Infinity Is Reachable: Infinite values are sometimes returned by PHP functions, such as ``log(0)`` or ``exp(PHP_INT_MAX)``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/infinite_is_reachable.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/infinite_is_reachable.png
	:og:title: PHP Infinity Is Reachable
	:og:type: article
	:og:description: Infinite values are sometimes returned by PHP functions, such as ``log(0)`` or ``exp(PHP_INT_MAX)``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/infinite_is_reachable.html
	:og:locale: en

By `Frederic Bouchery <https://bsky.app/profile/bouchery.fr>`_

Infinite values are sometimes returned by PHP functions, such as ``log(0)`` or ``exp(PHP_INT_MAX)``. In these cases, beware and do not compare it directly with an integer as a positive is considered bigger than infinite. It is recommended to use the function ``is_finite``.

.. image:: ../images/infinite_is_reachable.png

* `is_infinite() (PHP manual) <https://www.php.net/is_infinite>`_


