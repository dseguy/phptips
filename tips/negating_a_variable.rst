.. _negating-an-assignation:

Negating An Assignation
-----------------------

.. meta::
	:description:
		Negating An Assignation: I always wondered why PHP allows to NOT a variable on the LEFT side of an assignation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Negating An Assignation
	:twitter:description: Negating An Assignation: I always wondered why PHP allows to NOT a variable on the LEFT side of an assignation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/negating_a_variable.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/negating_a_variable.png
	:og:title: Negating An Assignation
	:og:type: article
	:og:description: I always wondered why PHP allows to NOT a variable on the LEFT side of an assignation
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/negating_a_variable.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/negating_a_variable.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/negating_a_variable.html","name":"Negating An Assignation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 26 Jun 2025 20:10:59 +0000","dateModified":"Thu, 26 Jun 2025 20:10:59 +0000","description":"I always wondered why PHP allows to NOT a variable on the LEFT side of an assignation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/negating_a_variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

I always wondered why PHP allows to NOT a variable on the LEFT side of an assignation.

It makes sense with an iffectation (an assignation in an if)

I'm sure other such expressions are possible, with unary operators. 

Definitely not for me, for readability reasons; same as ``!$o instanceof X``.

.. image:: ../images/negating_a_variable.png

See Also
________

* `Operator precedence (PHP manual) <https://www.php.net/manual/en/language.operators.precedence.php>`_
* `Don't negate conditions' <https://3v4l.org/OaqKp>`_ [Try me]

