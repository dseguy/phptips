.. _before-or-after:

Before Or After
---------------

.. meta::
	:description:
		Before Or After: PHP takes the opportunity to validate everything it can when it is handy, and leave the rest to execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Before Or After
	:twitter:description: Before Or After: PHP takes the opportunity to validate everything it can when it is handy, and leave the rest to execution time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/before_after.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/before_after.png
	:og:title: Before Or After
	:og:type: article
	:og:description: PHP takes the opportunity to validate everything it can when it is handy, and leave the rest to execution time
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/before_after.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/before_after.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/before_after.html","name":"Before Or After","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Jan 2024 15:31:53 +0000","dateModified":"Sun, 14 Jan 2024 15:31:53 +0000","description":"PHP takes the opportunity to validate everything it can when it is handy, and leave the rest to execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/before_after.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP takes the opportunity to validate everything it can when it is handy, and leave the rest to execution time. In the code below, the first class has no error reported, because it is linted before the parent class. The last class displays an error because it appears after the definition of the parent, and PHP can lazily check it.

The validation of the first class will be more thorough at execution time, and yield the error then.

.. image:: ../images/before_after.png

