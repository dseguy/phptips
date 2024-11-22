.. _recursive-generator:

Recursive Generator
-------------------

.. meta::
	:description:
		Recursive Generator: Generator, using yield, may become recursive, when using the ``yield from`` keyword.
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: Recursive Generator.
	:twitter:description: Recursive Generator: Generator, using yield, may become recursive, when using the ``yield from`` keyword.
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/recursive_yield.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/recursive_yield.png.png.
	:og:image: Recursive Generator: Generator, using yield, may become recursive, when using the ``yield from`` keyword.

Generator, using yield, may become recursive, when using the ``yield from`` keyword. This recursion is only available when used with a foreach() statement, or a generator using statement such as iterator_to_array().

.. image:: ../images/recursive_yield.png

* `Generator syntax <https://www.php.net/manual/en/language.generators.syntax.php>`_


