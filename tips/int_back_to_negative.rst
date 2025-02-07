.. _integer-becomes-negative:

Integer Becomes Negative
------------------------

.. meta::
	:description:
		Integer Becomes Negative: $a is the largest integer in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Integer Becomes Negative
	:twitter:description: Integer Becomes Negative: $a is the largest integer in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/int_back_to_negative.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/int_back_to_negative.png
	:og:title: Integer Becomes Negative
	:og:type: article
	:og:description: $a is the largest integer in PHP
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/int_back_to_negative.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/int_back_to_negative.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/int_back_to_negative.html","name":"Integer Becomes Negative","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 12 Jan 2024 10:54:05 +0000","dateModified":"Fri, 12 Jan 2024 10:54:05 +0000","description":"$a is the largest integer in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/int_back_to_negative.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

$a is the largest integer in PHP. So, $b, which is one bigger than $a, is actually a float, which is bigger and still positive. When casting the float to an integer, the integer is turned into a negative number by overflowing.

.. image:: ../images/int_back_to_negative.png

See Also
________

* `Integer (PHP manual) <https://www.php.net/manual/en/language.types.integer.php>`_

