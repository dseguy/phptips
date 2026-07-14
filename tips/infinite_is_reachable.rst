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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_is_reachable.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_is_reachable.html","name":"PHP Infinity Is Reachable","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:56+00:00","dateModified":"2026-07-14T14:31:56+00:00","description":"Infinite values are sometimes returned by PHP functions, such as ``log(0)`` or ``exp(PHP_INT_MAX)``","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_is_reachable.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   var_dump(is_infinite(log(0)));
   // true
   var_dump(1 > log(0));
   // true


Infinite values are sometimes returned by PHP functions, such as ``log(0)`` or ``exp(PHP_INT_MAX)``. In these cases, beware and do not compare it directly with an integer as a positive is considered bigger than infinite. It is recommended to use the function ``is_finite``.

See Also
________

* `is_infinite() (PHP manual) <https://www.php.net/is_infinite>`_
* `beyond infinity <https://3v4l.org/lU5bg>`_ [Try me]


PHP Features
____________

* `math <https://php-dictionary.readthedocs.io/en/latest/dictionary/math.ini.html>`_

* `integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/integer.ini.html>`_



Last updated: 14 July 2026