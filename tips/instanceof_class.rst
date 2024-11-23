.. _instanceof-object:

instanceof Object
-----------------

.. meta::
	:description:
		instanceof Object: object is a type, but it can also be used as a constant name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: instanceof Object
	:twitter:description: instanceof Object: object is a type, but it can also be used as a constant name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/instanceof_class.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/instanceof_class.png
	:og:title: instanceof Object
	:og:type: article
	:og:description: object is a type, but it can also be used as a constant name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/instanceof_class.html
	:og:locale: en

object is a type, but it can also be used as a constant name. Then, instanceof will accept it for testing a variable. 

There are some other cases around instanceof, which are surprising upon first read. 

We can use a string in a variable, but not a direct string, a constant nor a ::class.

.. image:: ../images/instanceof_class.png

* `Type Operators (PHP manual) <https://www.php.net/manual/en/language.operators.type.php>`_


