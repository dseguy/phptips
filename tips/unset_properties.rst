.. _unsetting-properties-surprises:

Unsetting Properties Surprises
------------------------------

.. meta::
	:description:
		Unsetting Properties Surprises: Unsetting properties is always a surprise.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unsetting Properties Surprises
	:twitter:description: Unsetting Properties Surprises: Unsetting properties is always a surprise
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/unset_properties.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/unset_properties.png
	:og:title: Unsetting Properties Surprises
	:og:type: article
	:og:description: Unsetting properties is always a surprise
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unset_properties.html
	:og:locale: en

Unsetting properties is always a surprise.

First, if the property was typed, it yields a Fatal Error, as the property cannot be accessed before initialization. And, the unset destroyed the property.

Also, checking an unset property with property_exists() is done against the class definition, not the current object state.

.. image:: ../images/unset_properties.png

* `Double quoted <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`_


