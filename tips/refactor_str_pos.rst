.. _refactoring-strpos():

Refactoring strpos()
--------------------

.. meta::
	:description:
		Refactoring strpos(): It is straightforward to convert an expression strpos() === 0 to using the str_start_with() function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Refactoring strpos()
	:twitter:description: Refactoring strpos(): It is straightforward to convert an expression strpos() === 0 to using the str_start_with() function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/refactor_str_pos.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/refactor_str_pos.png
	:og:title: Refactoring strpos()
	:og:type: article
	:og:description: It is straightforward to convert an expression strpos() === 0 to using the str_start_with() function
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/refactor_str_pos.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/refactor_str_pos.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/refactor_str_pos.html","name":"Refactoring strpos()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 02 Feb 2024 10:04:30 +0000","dateModified":"Fri, 02 Feb 2024 10:04:30 +0000","description":"It is straightforward to convert an expression strpos() === 0 to using the str_start_with() function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/refactor_str_pos.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

It is straightforward to convert an expression strpos() === 0 to using the str_start_with() function. On the other hand, it is not the same to replace those functions when the comparison is a difference, not an equality.

.. image:: ../images/refactor_str_pos.png

* `strpos() <https://www.php.net/manual/strpos>`_


