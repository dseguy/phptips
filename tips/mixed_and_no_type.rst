.. _mixed-and-untyped-are-not-compatible-types:

Mixed And Untyped Are Not Compatible Types
------------------------------------------

.. meta::
	:description:
		Mixed And Untyped Are Not Compatible Types: A property typed mixed cannot be redefined later as untyped.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Mixed And Untyped Are Not Compatible Types
	:twitter:description: Mixed And Untyped Are Not Compatible Types: A property typed mixed cannot be redefined later as untyped
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/mixed_and_no_type.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/mixed_and_no_type.png
	:og:title: Mixed And Untyped Are Not Compatible Types
	:og:type: article
	:og:description: A property typed mixed cannot be redefined later as untyped
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/mixed_and_no_type.html
	:og:locale: en

A property typed mixed cannot be redefined later as untyped. 

A property untyped cannot be redefined later as mixed. 



Although, both syntax represent the same reality: any type goes. 



Same for return type, in method compatibility situations. Although, it happens only when the parent is mixed, and the child untyped. 



With return type, PHP does check if anything is returned with a type of ``mixed``, and not if it is untyped.

.. image:: ../images/mixed_and_no_type.png

* `Mixed (PHP manual) <https://www.php.net/manual/en/language.types.mixed.php>`_


