.. _recursive-closure:

Recursive Closure
-----------------

.. meta::
	:description:
		Recursive Closure: To make a recursive closure, the closure must be both stored in a variable and passed as a ``use`` parameter to the same factorial.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Recursive Closure
	:twitter:description: Recursive Closure: To make a recursive closure, the closure must be both stored in a variable and passed as a ``use`` parameter to the same factorial
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/recursive_closure.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/recursive_closure.png
	:og:title: Recursive Closure
	:og:type: article
	:og:description: To make a recursive closure, the closure must be both stored in a variable and passed as a ``use`` parameter to the same factorial
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/recursive_closure.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_closure.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_closure.html","name":"Recursive Closure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Apr 2025 17:57:48 +0000","dateModified":"Mon, 21 Apr 2025 17:56:55 +0000","description":"To make a recursive closure, the closure must be both stored in a variable and passed as a ``use`` parameter to the same factorial","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_closure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

To make a recursive closure, the closure must be both stored in a variable and passed as a ``use`` parameter to the same factorial.

It also works for arrow functions, although there is no the use, but the variable must be defined first, so it can be used in context later.

.. image:: ../images/recursive_closure.png

See Also
________

* `Closure (PHP manual) <https://www.php.net/manual/en/class.closure.php>`_
* `recursive closure <https://3v4l.org/3MHeR>`_

