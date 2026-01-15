.. _instanceof-object:

instanceof Object
-----------------

.. meta::
	:description:
		instanceof Object: object is a type, but it can also be used as a constant name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: instanceof Object
	:twitter:description: instanceof Object: object is a type, but it can also be used as a constant name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/instanceof_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/instanceof_class.png
	:og:title: instanceof Object
	:og:type: article
	:og:description: object is a type, but it can also be used as a constant name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/instanceof_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instanceof_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instanceof_class.html","name":"instanceof Object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 13 Jan 2026 10:15:21 +0000","dateModified":"Wed, 24 Sep 2025 17:47:51 +0000","description":"object is a type, but it can also be used as a constant name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instanceof_class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/instanceof_class.png

object is a type, but it can also be used as a constant name. Then, instanceof accepts it for testing a variable.

There are some other cases around instanceof, which are surprising upon first read.

It is possible to use a string or an object in a variable, but not a direct string, a constant nor a ``::class``.

See Also
________

* `Type Operators (PHP manual) <https://www.php.net/manual/en/language.operators.type.php>`_
* `instance of a class <https://3v4l.org/Qig0E>`_ [Try me]


PHP Features
____________

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/constant.ini.html>`_


