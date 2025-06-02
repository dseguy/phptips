.. _negative-squares:

Negative Squares
----------------

.. meta::
	:description:
		Negative Squares: This is still my favorite PHP bug : literal negative value is squared, and is .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Negative Squares
	:twitter:description: Negative Squares: This is still my favorite PHP bug : literal negative value is squared, and is 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/squared_negative.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/squared_negative.png
	:og:title: Negative Squares
	:og:type: article
	:og:description: This is still my favorite PHP bug : literal negative value is squared, and is 
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/squared_negative.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/squared_negative.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/squared_negative.html","name":"Negative Squares","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 18 Apr 2025 15:31:18 +0000","dateModified":"Fri, 18 Apr 2025 15:31:18 +0000","description":"This is still my favorite PHP bug : literal negative value is squared, and is ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/squared_negative.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

This is still my favorite PHP bug : literal negative value is squared, and is ... negative. In fact, the ``**`` operator has precedence over the minus operator, and the square is then executed before the negation. Hence, the negative results. It is useful to process, correctly, parentheseses, but not integers.

.. image:: ../images/squared_negative.png

See Also
________

* `Operator Precedence <https://www.php.net/manual/en/language.operators.precedence.php>`_
* `-3 ^ 2 == -9 <https://3v4l.org/fKHbm>`_ [Try me]

