.. _no-force-object-to-string:

No Force Object To String
-------------------------

.. meta::
	:description:
		No Force Object To String: PHP forces numeric strings to integers when using them as a index, in an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Force Object To String
	:twitter:description: No Force Object To String: PHP forces numeric strings to integers when using them as a index, in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/no_force_object_to_string.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/no_force_object_to_string.png
	:og:title: No Force Object To String
	:og:type: article
	:og:description: PHP forces numeric strings to integers when using them as a index, in an array
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/no_force_object_to_string.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_force_object_to_string.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_force_object_to_string.html","name":"No Force Object To String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 03 Nov 2024 09:23:50 +0000","dateModified":"Sun, 03 Nov 2024 09:23:50 +0000","description":"PHP forces numeric strings to integers when using them as a index, in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_force_object_to_string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP forces numeric strings to integers when using them as a index, in an array. On the other hand, it doesn't force objects to be strings, and it rather raise an error: ``Illegal offset type``.

.. image:: ../images/no_force_object_to_string.png

* `Arrays (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_


