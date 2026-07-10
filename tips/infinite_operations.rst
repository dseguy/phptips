.. _infinite-operations:

Infinite Operations
-------------------

.. meta::
	:description:
		Infinite Operations: Here are some border line calculations with large numbers in PHP: calculating beyond PHP_INT_MAX is possible, as long as the resulting number is still.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Infinite Operations
	:twitter:description: Infinite Operations: Here are some border line calculations with large numbers in PHP: calculating beyond PHP_INT_MAX is possible, as long as the resulting number is still
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/infinite_operations.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/infinite_operations.png
	:og:title: Infinite Operations
	:og:type: article
	:og:description: Here are some border line calculations with large numbers in PHP: calculating beyond PHP_INT_MAX is possible, as long as the resulting number is still
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/infinite_operations.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_operations.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_operations.html","name":"Infinite Operations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 08:53:31 +0000","dateModified":"Fri, 10 Jul 2026 08:53:31 +0000","description":"Here are some border line calculations with large numbers in PHP: calculating beyond PHP_INT_MAX is possible, as long as the resulting number is still","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_operations.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/infinite_operations.png

Here are some border line calculations with large numbers in PHP: calculating beyond PHP_INT_MAX is possible, as long as the resulting number is still... a number: here, it is a float. The same calculation is not possible with floats, because they are capped by infinite. Infinite is around 1E308.

In particular, adding extra elements to PHP_FLOAT_MAX yields strange comparaisons: if the addition is small enough, it is rounded to 0, and ignored. This is not the case with multiplication, where the numbers are all going beyond PHP_FLOAT_MAX, and are turned into INF, which, by the way, is an float type.

Finally, using power ``**`` on INF is still capped by INF, so it is valid calculation, without overflow.

See Also
________

* `Really Large Numbers <https://3v4l.org/KHkJl#v8.5.7>`_ [Try me]


PHP Features
____________

* `float <https://php-dictionary.readthedocs.io/en/latest/dictionary/float.ini.html>`_

* `power <https://php-dictionary.readthedocs.io/en/latest/dictionary/power.ini.html>`_

* `addition <https://php-dictionary.readthedocs.io/en/latest/dictionary/addition.ini.html>`_


