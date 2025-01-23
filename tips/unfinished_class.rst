.. _unfinished-class-doesn't-compile:

Unfinished Class Doesn't Compile
--------------------------------

.. meta::
	:description:
		Unfinished Class Doesn't Compile: PHP is not able to use a class before it is defined.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unfinished Class Doesn't Compile
	:twitter:description: Unfinished Class Doesn't Compile: PHP is not able to use a class before it is defined
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/unfinished_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/unfinished_class.png
	:og:title: Unfinished Class Doesn't Compile
	:og:type: article
	:og:description: PHP is not able to use a class before it is defined
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unfinished_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unfinished_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unfinished_class.html","name":"Unfinished Class Doesn't Compile","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 07 Oct 2024 19:51:13 +0000","dateModified":"Mon, 07 Oct 2024 19:51:13 +0000","description":"PHP is not able to use a class before it is defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unfinished_class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Jan Nedbal <https://janedbal.cz/>`_

PHP is not able to use a class before it is defined. Yet, when the second class is simple enough to be entirely defined, it would. When the class is not completely defined, aka it has the extends, implements, or use (for trait) keywords, PHP postpone the finalization of the class to execution phase, and consider it as non-defined.

.. image:: ../images/unfinished_class.png

* `Object Inheritance <https://www.php.net/manual/en/language.oop5.inheritance.php>`_
* `Sometimes, PHP world is really weird. <https://twitter.com/janedbal/status/1758410205568643495>`_


