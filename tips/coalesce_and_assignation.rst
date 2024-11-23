.. _coalesce-and-assignation:

Coalesce And Assignation
------------------------

.. meta::
	:description:
		Coalesce And Assignation: Coalesce has lower priority than assignation, so assignation happens first.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Coalesce And Assignation
	:twitter:description: Coalesce And Assignation: Coalesce has lower priority than assignation, so assignation happens first
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/coalesce_and_assignation.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/coalesce_and_assignation.png
	:og:title: Coalesce And Assignation
	:og:type: article
	:og:description: Coalesce has lower priority than assignation, so assignation happens first
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/coalesce_and_assignation.html
	:og:locale: en

Coalesce has lower priority than assignation, so assignation happens first. It basically acts as a parenthesis, with the rest of the expression, and the results, stored in the variable, is used as part of the coalesce operator.

.. image:: ../images/coalesce_and_assignation.png

* `Operators precedence <https://www.php.net/manual/en/language.operators.precedence.php>`_
* `Null Coalesce Operator <https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce>`_


