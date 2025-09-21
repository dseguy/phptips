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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unfinished_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unfinished_class.html","name":"Unfinished Class Doesn't Compile","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Mar 2025 10:19:18 +0000","dateModified":"Fri, 07 Mar 2025 10:19:18 +0000","description":"PHP is not able to use a class before it is defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unfinished_class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Jan Nedbal <https://janedbal.cz/>`_

.. image:: ../images/unfinished_class.png

PHP is not able to use a class before it is defined. Yet, when the second class is simple enough to be entirely defined, it would. When the class is not completely defined, aka it has the extends, implements, or use (for trait) keywords, PHP postpone the finalization of the class to execution phase, and consider it as non-defined.

See Also
________

* `Object Inheritance <https://www.php.net/manual/en/language.oop5.inheritance.php>`_
* `Sometimes, PHP world is really weird. <https://twitter.com/janedbal/status/1758410205568643495>`_
* `Simple Fatal Error <https://3v4l.org/GGUVm>`_ [Try me]


PHP Error Messages
__________________

* `Class "%s" not found <https://php-errors.readthedocs.io/en/latest/messages/class-%22%25s%22-not-found.html>`_



PHP Features
____________

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `definition <https://php-dictionary.readthedocs.io/en/latest/dictionary/definition.ini.html>`_


