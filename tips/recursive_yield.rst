.. _recursive-generator:

Recursive Generator
-------------------

.. meta::
	:description:
		Recursive Generator: Generators in PHP, when using the ``yield`` keyword, can become recursive through the use of the ``yield from`` construct.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Recursive Generator
	:twitter:description: Recursive Generator: Generators in PHP, when using the ``yield`` keyword, can become recursive through the use of the ``yield from`` construct
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/recursive_yield.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/recursive_yield.png
	:og:title: Recursive Generator
	:og:type: article
	:og:description: Generators in PHP, when using the ``yield`` keyword, can become recursive through the use of the ``yield from`` construct
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/recursive_yield.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_yield.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_yield.html","name":"Recursive Generator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 06 Aug 2025 16:59:20 +0000","dateModified":"Wed, 06 Aug 2025 16:59:20 +0000","description":"Generators in PHP, when using the ``yield`` keyword, can become recursive through the use of the ``yield from`` construct","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_yield.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Generators in PHP, when using the ``yield`` keyword, can become recursive through the use of the ``yield from`` construct. This allows a generator to delegate part of its iteration to another generator, creating a chain of generators. However, this recursive behavior is only effective when the generator is consumed by an external iteration mechanism such as a ``foreach()`` loop or a function like ``iterator_to_array()``. Without such iteration, the recursive yielding will not be triggered or evaluated.

.. image:: ../images/recursive_yield.png

See Also
________

* `recursive yielding functions <https://3v4l.org/kpOuk>`_ [Try me]


PHP Features
____________

* `yield <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield.ini.html>`_

* `yield-from <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield-from.ini.html>`_

* `recursion <https://php-dictionary.readthedocs.io/en/latest/dictionary/recursion.ini.html>`_

* `generator <https://php-dictionary.readthedocs.io/en/latest/dictionary/generator.ini.html>`_


