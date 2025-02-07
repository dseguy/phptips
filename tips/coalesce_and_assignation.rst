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
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/coalesce_and_assignation.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/coalesce_and_assignation.png
	:og:title: Coalesce And Assignation
	:og:type: article
	:og:description: Coalesce has lower priority than assignation, so assignation happens first
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/coalesce_and_assignation.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/coalesce_and_assignation.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/coalesce_and_assignation.html","name":"Coalesce And Assignation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 02 Feb 2024 10:23:15 +0000","dateModified":"Fri, 02 Feb 2024 10:23:15 +0000","description":"Coalesce has lower priority than assignation, so assignation happens first","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/coalesce_and_assignation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Coalesce has lower priority than assignation, so assignation happens first. It basically acts as a parenthesis, with the rest of the expression, and the results, stored in the variable, is used as part of the coalesce operator.

.. image:: ../images/coalesce_and_assignation.png

See Also
________

* `Operators precedence <https://www.php.net/manual/en/language.operators.precedence.php>`_
* `Null Coalesce Operator <https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce>`_

