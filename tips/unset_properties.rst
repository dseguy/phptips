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
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/unset_properties.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/unset_properties.png
	:og:title: Unsetting Properties Surprises
	:og:type: article
	:og:description: Unsetting properties is always a surprise
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unset_properties.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unset_properties.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unset_properties.html","name":"Unsetting Properties Surprises","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 May 2024 19:40:02 +0000","dateModified":"Sun, 26 May 2024 19:40:02 +0000","description":"Unsetting properties is always a surprise","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unset_properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Unsetting properties is always a surprise.

First, if the property was typed, it yields a Fatal Error, as the property cannot be accessed before initialization. And, the unset destroyed the property.

Also, checking an unset property with property_exists() is done against the class definition, not the current object state.

.. image:: ../images/unset_properties.png

See Also
________

* `Double quoted <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`_

