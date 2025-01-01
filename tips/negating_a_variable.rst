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

I always wondered why PHP allows to NOT a variable on the LEFT side of an assignation.

It makes sense with an iffectation (an assignation in an if)

I'm sure other such expressions are possible, with unary operators. 

Definitely not for me, for readability reasons; same as ``!$o instanceof X``.

.. image:: ../images/negating_a_variable.png

* `Operator precedence (PHP manual) <https://www.php.net/manual/en/language.operators.precedence.php>`_


