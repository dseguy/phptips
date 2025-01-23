.. _only-initialize-with-short-assignation-coalesce:

Only Initialize With Short Assignation Coalesce
-----------------------------------------------

.. meta::
	:description:
		Only Initialize With Short Assignation Coalesce: It is not possible to access a property before its initialisation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only Initialize With Short Assignation Coalesce
	:twitter:description: Only Initialize With Short Assignation Coalesce: It is not possible to access a property before its initialisation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/initialize_with_coalesce.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/initialize_with_coalesce.png
	:og:title: Only Initialize With Short Assignation Coalesce
	:og:type: article
	:og:description: It is not possible to access a property before its initialisation
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/initialize_with_coalesce.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_with_coalesce.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_with_coalesce.html","name":"Only Initialize With Short Assignation Coalesce","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Feb 2024 22:30:10 +0000","dateModified":"Tue, 20 Feb 2024 22:30:10 +0000","description":"It is not possible to access a property before its initialisation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_with_coalesce.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

It is not possible to access a property before its initialisation. This is true to both static and normal properties.

While normal properties are initialized at constructor time, static properties might require a check before assignation : in case the property has not been yet assigned, a Fatal error will stop the code execution.

In fact, there is a way : it is the short assignation with coalesce, which will accept to check the NULL value, and only fill it if it is null.

.. image:: ../images/initialize_with_coalesce.png

* `Properties <https://www.php.net/manual/en/language.oop5.properties.php>`_


