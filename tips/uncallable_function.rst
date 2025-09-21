.. _the-uncallable-function:

The Uncallable Function
-----------------------

.. meta::
	:description:
		The Uncallable Function: The function foo() cannot be called.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The Uncallable Function
	:twitter:description: The Uncallable Function: The function foo() cannot be called
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/uncallable_function.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/uncallable_function.png
	:og:title: The Uncallable Function
	:og:type: article
	:og:description: The function foo() cannot be called
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/uncallable_function.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/uncallable_function.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/uncallable_function.html","name":"The Uncallable Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Sep 2025 20:02:58 +0000","dateModified":"Thu, 18 Sep 2025 20:02:58 +0000","description":"The function foo() cannot be called","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/uncallable_function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/uncallable_function.png

The function foo() cannot be called. When the code does so, nothing happens.

The trick is the inclusion of a call to ``yield`` (or ``yield from``) in the function. It turns the function into a generator, and calling it directly does nothing. It needs to be called with foreach() or iterator_to_array().

This trick applies to functions, arrow functions, closures and methods.

See Also
________

* `Generators (PHP manual) <https://www.php.net/manual/en/language.generators.overview.php>`_
* `The function that cannot execute <https://3v4l.org/ZfoVL>`_ [Try me]


PHP Features
____________

* `function <https://php-dictionary.readthedocs.io/en/latest/dictionary/function.ini.html>`_

* `yield <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield.ini.html>`_

* `yield-from <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield-from.ini.html>`_


