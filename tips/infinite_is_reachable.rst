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
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/infinite_is_reachable.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/infinite_is_reachable.png
	:og:title: PHP Infinity Is Reachable
	:og:type: article
	:og:description: Infinite values are sometimes returned by PHP functions, such as ``log(0)`` or ``exp(PHP_INT_MAX)``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/infinite_is_reachable.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_is_reachable.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_is_reachable.html","name":"PHP Infinity Is Reachable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 27 Nov 2024 18:02:17 +0000","dateModified":"Wed, 27 Nov 2024 18:02:17 +0000","description":"Infinite values are sometimes returned by PHP functions, such as ``log(0)`` or ``exp(PHP_INT_MAX)``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_is_reachable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Frederic Bouchery <https://bsky.app/profile/bouchery.fr>`_

Infinite values are sometimes returned by PHP functions, such as ``log(0)`` or ``exp(PHP_INT_MAX)``. In these cases, beware and do not compare it directly with an integer as a positive is considered bigger than infinite. It is recommended to use the function ``is_finite``.

.. image:: ../images/infinite_is_reachable.png

* `is_infinite() (PHP manual) <https://www.php.net/is_infinite>`_


