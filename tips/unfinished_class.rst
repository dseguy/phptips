.. _unfinished-class-doesn't-compile:

Unfinished Class Doesn't Compile
--------------------------------

.. meta::
	:description:
		Unfinished Class Doesn't Compile: PHP is not able to use a class before it is defined.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unfinished Class Doesn't Compile
	:twitter:description: Unfinished Class Doesn't Compile: PHP is not able to use a class before it is defined
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/unfinished_class.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/unfinished_class.png
	:og:title: Unfinished Class Doesn't Compile
	:og:type: article
	:og:description: PHP is not able to use a class before it is defined
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unfinished_class.html
	:og:locale: en

By `Jan Nedbal <https://janedbal.cz/>`_

PHP is not able to use a class before it is defined. Yet, when the second class is simple enough to be entirely defined, it would. When the class is not completely defined, aka it has the extends, implements, or use (for trait) keywords, PHP postpone the finalization of the class to execution phase, and consider it as non-defined.

.. image:: ../images/unfinished_class.png

* `Object Inheritance <https://www.php.net/manual/en/language.oop5.inheritance.php>`_
* `Sometimes, PHP world is really weird. <https://twitter.com/janedbal/status/1758410205568643495>`_


