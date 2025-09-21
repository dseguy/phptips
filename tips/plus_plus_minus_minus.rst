.. _plus-plus-minus-minus:

Plus Plus Minus Minus
---------------------

.. meta::
	:description:
		Plus Plus Minus Minus: What does a separated list of plus and minus do to a literal.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Plus Plus Minus Minus
	:twitter:description: Plus Plus Minus Minus: What does a separated list of plus and minus do to a literal
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/plus_plus_minus_minus.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/plus_plus_minus_minus.png
	:og:title: Plus Plus Minus Minus
	:og:type: article
	:og:description: What does a separated list of plus and minus do to a literal
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/plus_plus_minus_minus.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/plus_plus_minus_minus.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/plus_plus_minus_minus.html","name":"Plus Plus Minus Minus","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 12 Jun 2025 04:39:20 +0000","dateModified":"Thu, 12 Jun 2025 04:39:20 +0000","description":"What does a separated list of plus and minus do to a literal","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/plus_plus_minus_minus.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/plus_plus_minus_minus.png

What does a separated list of plus and minus do to a literal? They will be merged independently in the literal. Here, two negations will make a positive, so we get a plus.

Don't forget the space between the plus and minus, or it will be a post increment operator, and a different answer.

See Also
________

* `plus plus <https://3v4l.org/4m7rI>`_ [Try me]


PHP Features
____________

* `operator <https://php-dictionary.readthedocs.io/en/latest/dictionary/operator.ini.html>`_


