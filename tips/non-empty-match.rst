.. _non-empty-match:

Non Empty Match
---------------

.. meta::
	:description:
		Non Empty Match: PHP allows the empty ``switch``: that is, a switch command with an empty block of cases.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non Empty Match
	:twitter:description: Non Empty Match: PHP allows the empty ``switch``: that is, a switch command with an empty block of cases
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/non-empty-match.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/non-empty-match.png
	:og:title: Non Empty Match
	:og:type: article
	:og:description: PHP allows the empty ``switch``: that is, a switch command with an empty block of cases
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/non-empty-match.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-empty-match.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-empty-match.html","name":"Non Empty Match","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Dec 2024 22:00:12 +0000","dateModified":"Fri, 06 Dec 2024 22:00:12 +0000","description":"PHP allows the empty ``switch``: that is, a switch command with an empty block of cases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-empty-match.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP allows the empty ``switch``: that is, a switch command with an empty block of cases. The whole expression does nothing, and it is as useless as an if statement with an empty block.

The ``match`` statement, on the other hand, compiles just like the ``switch`` but it also enforces the default case, with an ``Uncaught UnhandledMatchError: Unhandled match case NULL`` exception. This one must be cautght, or one must add a ``default`` case, with a value, to the ``match`` to keep it useless.

.. image:: ../images/non-empty-match.png

See Also
________

* `switch (PHP manual) <https://www.php.net/manual/en/control-structures.match.php>`_
* `match (PHP manual) <https://www.php.net/manual/en/control-structures.switch.php>`_

