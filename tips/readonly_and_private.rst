.. _set-readonly-properties-outside-the-class:

Set readonly Properties Outside The Class
-----------------------------------------

.. meta::
	:description:
		Set readonly Properties Outside The Class: PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Set readonly Properties Outside The Class
	:twitter:description: Set readonly Properties Outside The Class: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/readonly_and_private.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/readonly_and_private.png
	:og:title: Set readonly Properties Outside The Class
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/readonly_and_private.html
	:og:locale: en

PHP 8.1 readonly properties cannot be set from global space, but they can be forced from the host class, just like accessing private properties. 

It doesn't work outside the host class : not in global space, not in a derived class.

Besides that, readonly act as usual : it is only possible to assign the property once.

.. image:: ../images/readonly_and_private.png

* `Readonly properties <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties>`_
* `Visibility <https://www.php.net/manual/en/language.oop5.visibility.php>`_
* `Class Invasation <https://php-dictionary.readthedocs.io/en/latest/dictionary.html#class-invasion>`_


