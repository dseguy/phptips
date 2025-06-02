.. _exponential-minus-one:

Exponential Minus One
---------------------

.. meta::
	:description:
		Exponential Minus One: You can save typing by using expm1($x) instead of exp($x) - 1.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exponential Minus One
	:twitter:description: Exponential Minus One: You can save typing by using expm1($x) instead of exp($x) - 1
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/exp_minus_one.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/exp_minus_one.png
	:og:title: Exponential Minus One
	:og:type: article
	:og:description: You can save typing by using expm1($x) instead of exp($x) - 1
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/exp_minus_one.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/exp_minus_one.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/exp_minus_one.html","name":"Exponential Minus One","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Dec 2024 13:26:03 +0000","dateModified":"Sun, 26 May 2024 19:41:38 +0000","description":"You can save typing by using expm1($x) instead of exp($x) - 1","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/exp_minus_one.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

You can save typing by using expm1($x) instead of exp($x) - 1. Also, you might have to take care of differences, as both results might be slightly different depending on the OS you're running it on : Debian is OK, but MacOS says it's different.

.. image:: ../images/exp_minus_one.png

See Also
________

* `expm1() (PHP manual) <https://www.php.net/expm1>`_
* `expm1() versus exp() - 1 <https://3v4l.org/s2Y5G>`_ [Try me]

