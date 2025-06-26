.. _refactoring-strpos():

Refactoring strpos()
--------------------

.. meta::
	:description:
		Refactoring strpos(): Converting an expression like ``strpos() === 0`` to use ``str_starts_with()`` is simple and direct.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Refactoring strpos()
	:twitter:description: Refactoring strpos(): Converting an expression like ``strpos() === 0`` to use ``str_starts_with()`` is simple and direct
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/refactor_str_pos.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/refactor_str_pos.png
	:og:title: Refactoring strpos()
	:og:type: article
	:og:description: Converting an expression like ``strpos() === 0`` to use ``str_starts_with()`` is simple and direct
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/refactor_str_pos.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/refactor_str_pos.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/refactor_str_pos.html","name":"Refactoring strpos()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 26 Jun 2025 20:25:54 +0000","dateModified":"Thu, 26 Jun 2025 20:25:54 +0000","description":"Converting an expression like ``strpos() === 0`` to use ``str_starts_with()`` is simple and direct","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/refactor_str_pos.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Converting an expression like ``strpos() === 0`` to use ``str_starts_with()`` is simple and direct. However, caution is needed when the comparison involves a difference rather than equality. In such cases, replacing the functions isn’t a straightforward one-to-one substitution, as the logic and intent behind the original expression may change, leading to unexpected behavior if not handled carefully.

.. image:: ../images/refactor_str_pos.png

See Also
________

* `strpos() <https://www.php.net/manual/strpos>`_
* `str_start_with() <https://www.php.net/manual/str_starts_with>`_
* `to be or not to be at the beginning of a string <https://3v4l.org/bO6YB>`_ [Try me]

