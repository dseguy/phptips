.. _recursive-arrow-function:

Recursive Arrow Function
------------------------

.. meta::
	:description:
		Recursive Arrow Function: To make an arrow function recursive, it must include itself in the list of arguments.
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: Recursive Arrow Function.
	:twitter:description: Recursive Arrow Function: To make an arrow function recursive, it must include itself in the list of arguments.
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/recursive_arrow_function.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/recursive_arrow_function.png.png.
	:og:image: Recursive Arrow Function: To make an arrow function recursive, it must include itself in the list of arguments.

To make an arrow function recursive, it must include itself in the list of arguments. That way, it can call itself.

The intriguing point here is that the arrow function is defined based on the current variables, and the function holding variable is only defined after the arrow function.

.. image:: ../images/recursive_arrow_function.png

* `Arrow Functions (PHP manual) <https://www.php.net/manual/en/functions.arrow.php>`_


