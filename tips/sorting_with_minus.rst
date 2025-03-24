.. _sorting-with-minus:

Sorting With Minus
------------------

.. meta::
	:description:
		Sorting With Minus: Did you know that sorting f, 0 and -f actually ends up with -f first, then 0, then f.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sorting With Minus
	:twitter:description: Sorting With Minus: Did you know that sorting f, 0 and -f actually ends up with -f first, then 0, then f
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/sorting_with_minus.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/sorting_with_minus.png
	:og:title: Sorting With Minus
	:og:type: article
	:og:description: Did you know that sorting f, 0 and -f actually ends up with -f first, then 0, then f
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/sorting_with_minus.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sorting_with_minus.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sorting_with_minus.html","name":"Sorting With Minus","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 18:45:10 +0000","dateModified":"Mon, 24 Mar 2025 18:45:10 +0000","description":"Did you know that sorting f, 0 and -f actually ends up with -f first, then 0, then f","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sorting_with_minus.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Did you know that sorting f, 0 and -f actually ends up with -f first, then 0, then f. And this works with any string, including strings with duplicate initial minus sign.

This is the SORT_REGULAR, with which PHP compares 'normally' different pieces of data. Any string whose first character has an ASCII code lower than 0 will be sorted first (in PHP 8.2+) : this means characters up to /. Then any starting character beyond 9, aka colon and beyond, will be sorted after the 0 (or any digit).

That normal sort is used in ksort() and krsort() since PHP 8.2. This means that these functions may behave differently, when the keys string start with a '-' since.

This sort will sort string starting with '-' first: given the ASCII table, it also will sort strings starting with '+' before the '-'. Use with feature with caution.

.. image:: ../images/sorting_with_minus.png

See Also
________

* `PHP 8.2 incompatibilities <https://www.php.net/manual/en/migration82.incompatible.php>`_
* `ASCII table <https://www.ascii-code.com/>`_
* `ksort() <https://www.php.net/manual/en/function.ksort.php>`_
* `Sorting with a leading minus <https://3v4l.org/Tk3C4>`_

