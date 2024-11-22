.. _is_a()-versus-instanceof:

is_a() Versus Instanceof
------------------------

.. meta::
	:description:
		is_a() Versus Instanceof: is_a() and instanceof are the same feature: check if an object is of a specific class.
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: is_a() Versus Instanceof.
	:twitter:description: is_a() Versus Instanceof: is_a() and instanceof are the same feature: check if an object is of a specific class.
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/is_a_and_instanceof.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/is_a_and_instanceof.png.png.
	:og:image: is_a() Versus Instanceof: is_a() and instanceof are the same feature: check if an object is of a specific class.

is_a() and instanceof are the same feature: check if an object is of a specific class. Yet, they do things in different ways.

Using the ::class operator is safe in both cases.

Using a name is a class name for instanceof, while it is a constant name with is_a(). This may lead to confusion.

.. image:: ../images/is_a_and_instanceof.png

* `is_a (PHP manual) <https://www.php.net/manual/en/is_a.php>`_
* `type operators (PHP manual) <https://www.php.net/manual/en/language.operators.type.php#language.operators.type>`_


