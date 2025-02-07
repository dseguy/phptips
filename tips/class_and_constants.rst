.. _class-and-constant-confusion:

Class And Constant Confusion
----------------------------

.. meta::
	:description:
		Class And Constant Confusion: Class names and global constant names are two distinct name spaces.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class And Constant Confusion
	:twitter:description: Class And Constant Confusion: Class names and global constant names are two distinct name spaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/class_and_constants.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/class_and_constants.png
	:og:title: Class And Constant Confusion
	:og:type: article
	:og:description: Class names and global constant names are two distinct name spaces
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/class_and_constants.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_and_constants.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_and_constants.html","name":"Class And Constant Confusion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jan 2025 13:30:14 +0000","dateModified":"Tue, 14 Jan 2025 13:30:14 +0000","description":"Class names and global constant names are two distinct name spaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_and_constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Class names and global constant names are two distinct name spaces. It is possible to use the name of a class as a constant.

It is also possible to instanciate a class with a constant notation: that is, by omitting the parenthesis in the new call, when no arguments are needed.

This allows for very confusing lines like these ones.

.. image:: ../images/class_and_constants.png

See Also
________

* `Class Constants (PHP manual) <https://www.php.net/manual/en/language.oop5.constants.php>`_
* `class and constants <https://3v4l.org/RQIRu>`_

