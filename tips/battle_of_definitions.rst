.. _battle-of-definition:

Battle Of Definition
--------------------

.. meta::
	:description:
		Battle Of Definition: Methods signatures must be compatible with the parent class's definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Battle Of Definition
	:twitter:description: Battle Of Definition: Methods signatures must be compatible with the parent class's definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/battle_of_definitions.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/battle_of_definitions.png
	:og:title: Battle Of Definition
	:og:type: article
	:og:description: Methods signatures must be compatible with the parent class's definition
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/battle_of_definitions.html
	:og:locale: en

Methods signatures must be compatible with the parent class's definition. This is true, except for __construct(), for which the compatibility is not checked.

Yet, compatibility is still enforced when the __construct definition is in an interface.

.. image:: ../images/battle_of_definitions.png

* `Void (PHP manual) <https://www.php.net/manual/en/language.types.void.php>`_
* `3v4l : __construct() signature enforced when in an interface <https://3v4l.org/QPaRG>`_


