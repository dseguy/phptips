.. _coalesce-and-null:

Coalesce And Null
-----------------

.. meta::
	:description:
		Coalesce And Null: I'm still struggling to pick a PHP side.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Coalesce And Null
	:twitter:description: Coalesce And Null: I'm still struggling to pick a PHP side
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/coalesce_is_null.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/coalesce_is_null.png
	:og:title: Coalesce And Null
	:og:type: article
	:og:description: I'm still struggling to pick a PHP side
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/coalesce_is_null.html
	:og:locale: en

I'm still struggling to pick a PHP side.



@ is too slow, because it merely hides the error.



?? looks dumb: it reads : if it is null, use null as default.



the if() command is long to type.

.. image:: ../images/coalesce_is_null.png

* `Error Control Operators <https://www.php.net/manual/en/language.operators.errorcontrol.php>`_


