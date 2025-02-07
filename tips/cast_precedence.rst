.. _cast-precedence:

Cast Precedence
---------------

.. meta::
	:description:
		Cast Precedence: Casting has a higher precedence than multiplication (and addition).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cast Precedence
	:twitter:description: Cast Precedence: Casting has a higher precedence than multiplication (and addition)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/cast_precedence.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/cast_precedence.png
	:og:title: Cast Precedence
	:og:type: article
	:og:description: Casting has a higher precedence than multiplication (and addition)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/cast_precedence.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_precedence.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_precedence.html","name":"Cast Precedence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jan 2025 10:35:43 +0000","dateModified":"Fri, 17 Jan 2025 10:35:43 +0000","description":"Casting has a higher precedence than multiplication (and addition)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_precedence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Casting has a higher precedence than multiplication (and addition). Here, the cast on the float happens first, which leads to 0. This 0 is later multiplied by 100, and that still gives 0.

If $c was the first operand, it would be cast first to integer, with no impact, and then multiplied: that leads to a float value, even with the cast.

.. image:: ../images/cast_precedence.png

See Also
________

* `Operator Precedence <https://www.php.net/manual/en/language.operators.precedence.php>`_
* `Reverse illustration <https://3v4l.org/JIP0g>`_

