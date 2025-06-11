.. _no-force-object-to-string:

No Force Object To String
-------------------------

.. meta::
	:description:
		No Force Object To String: PHP automatically converts numeric strings to integers when used as array indices, so '123' becomes 123 (the integer).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Force Object To String
	:twitter:description: No Force Object To String: PHP automatically converts numeric strings to integers when used as array indices, so '123' becomes 123 (the integer)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/no_force_object_to_string.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/no_force_object_to_string.png
	:og:title: No Force Object To String
	:og:type: article
	:og:description: PHP automatically converts numeric strings to integers when used as array indices, so '123' becomes 123 (the integer)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/no_force_object_to_string.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_force_object_to_string.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_force_object_to_string.html","name":"No Force Object To String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Jun 2025 12:02:49 +0000","dateModified":"Tue, 10 Jun 2025 12:02:49 +0000","description":"PHP automatically converts numeric strings to integers when used as array indices, so '123' becomes 123 (the integer)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_force_object_to_string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP automatically converts numeric strings to integers when used as array indices, so '123' becomes 123 (the integer). However, PHP doesn't perform similar conversions for objects, when they are used as array keys. Instead, it immediately throws a fatal ``Illegal offset type`` error because objects are not automatically converted to valid array keys.

.. image:: ../images/no_force_object_to_string.png

See Also
________

* `Arrays (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_

