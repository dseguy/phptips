.. _inconsistent-constructor-signatures:

Inconsistent Constructor Signatures
-----------------------------------

.. meta::
	:description:
		Inconsistent Constructor Signatures: PHP enforces that methods have the same signature in a parent class and in a children class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inconsistent Constructor Signatures
	:twitter:description: Inconsistent Constructor Signatures: PHP enforces that methods have the same signature in a parent class and in a children class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/phptip-1.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/phptip-1.png
	:og:title: Inconsistent Constructor Signatures
	:og:type: article
	:og:description: PHP enforces that methods have the same signature in a parent class and in a children class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/phptip-1.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/phptip-1.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/phptip-1.html","name":"Inconsistent Constructor Signatures","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 07 Jun 2025 06:24:52 +0000","dateModified":"Sat, 07 Jun 2025 06:24:52 +0000","description":"PHP enforces that methods have the same signature in a parent class and in a children class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/phptip-1.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP enforces that methods have the same signature in a parent class and in a children class. It raises a Fatal Error if not.

Unless for constructors, where the signatures can be different.

This exception to the rule is for legacy purposes, as many source code have varying signatures in a class hierarchy.

Yet, modern OOP recommends to synchronize those signatures, so has to allow instantiation using the same set of arguments.

.. image:: ../images/phptip-1.png

See Also
________

* `Constructors and Destructors (PHP manual) <https://www.php.net/manual/en/language.oop5.decon.php>`_
* `Inconsistent Constructor Signatures <https://3v4l.org/RAMIo>`_ [Try me]


PHP Features
____________

* `php <https://php-dictionary.readthedocs.io/en/latest/dictionary/php.ini.html>`_

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `oop <https://php-dictionary.readthedocs.io/en/latest/dictionary/oop.ini.html>`_


