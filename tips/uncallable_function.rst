.. _uncallable-function:

Uncallable Function
-------------------

.. meta::
	:description:
		Uncallable Function: The function foo() cannot be called.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Uncallable Function
	:twitter:description: Uncallable Function: The function foo() cannot be called
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/uncallable_function.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/uncallable_function.png
	:og:title: Uncallable Function
	:og:type: article
	:og:description: The function foo() cannot be called
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/uncallable_function.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/uncallable_function.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/uncallable_function.html","name":"Uncallable Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Mar 2025 16:20:38 +0000","dateModified":"Fri, 07 Mar 2025 16:20:38 +0000","description":"The function foo() cannot be called","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/uncallable_function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

The function foo() cannot be called. When the code does so, nothing happens.

The trick is the inclusion of a call to yield (or yield from) in the function. It turns the function into a generator, and calling it directly does nothing. It needs to be called with foreach() or iterator_to_array().

This trick applies to functions, arrow functions, closures and methods.

.. image:: ../images/uncallable_function.png

See Also
________

* `Generators (PHP manual) <https://www.php.net/manual/en/language.generators.overview.php>`_
* `The function that cannot execute <https://3v4l.org/ZfoVL>`_ [Try me]

