.. _array_map_assoc():

array_map_assoc()
-----------------

.. meta::
	:description:
		array_map_assoc(): array_map() only provides the value of the array, not the key.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_map_assoc()
	:twitter:description: array_map_assoc(): array_map() only provides the value of the array, not the key
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/array_map_assoc.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/array_map_assoc.png
	:og:title: array_map_assoc()
	:og:type: article
	:og:description: array_map() only provides the value of the array, not the key
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_map_assoc.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_map_assoc.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_map_assoc.html","name":"array_map_assoc()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 03 Nov 2024 09:19:28 +0000","dateModified":"Sun, 03 Nov 2024 09:19:28 +0000","description":"array_map() only provides the value of the array, not the key","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_map_assoc.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

array_map() only provides the value of the array, not the key. To access the key, use the extra arguments, and array_keys().

Beware that the order of the arguments is now value, key, not the usual ``$key => $value``.

.. image:: ../images/array_map_assoc.png

See Also
________

* `array_map (PHP manual) <https://www.php.net/manual/en/function.array_map.php>`_

