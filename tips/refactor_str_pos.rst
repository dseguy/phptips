.. _refactoring-strpos():

Refactoring strpos()
--------------------

.. meta::
	:description:
		Refactoring strpos(): It is straightforward to convert an expression strpos() === 0 to using the str_start_with() function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Refactoring strpos()
	:twitter:description: Refactoring strpos(): It is straightforward to convert an expression strpos() === 0 to using the str_start_with() function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/refactor_str_pos.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/refactor_str_pos.png
	:og:title: Refactoring strpos()
	:og:type: article
	:og:description: It is straightforward to convert an expression strpos() === 0 to using the str_start_with() function
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/refactor_str_pos.html
	:og:locale: en

It is straightforward to convert an expression strpos() === 0 to using the str_start_with() function. On the other hand, it is not the same to replace those functions when the comparison is a difference, not an equality.

.. image:: ../images/refactor_str_pos.png

* `strpos() <https://www.php.net/manual/strpos>`_


