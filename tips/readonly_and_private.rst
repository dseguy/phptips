.. _set-readonly-properties-outside-the-class:

Set readonly Properties Outside The Class
-----------------------------------------

.. meta::
	:description:
		Set readonly Properties Outside The Class: PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Set readonly Properties Outside The Class
	:twitter:description: Set readonly Properties Outside The Class: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/readonly_and_private.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/readonly_and_private.png
	:og:title: Set readonly Properties Outside The Class
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/readonly_and_private.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/readonly_and_private.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/readonly_and_private.html","name":"Set readonly Properties Outside The Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Apr 2025 17:59:10 +0000","dateModified":"Mon, 21 Apr 2025 17:59:10 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/readonly_and_private.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/readonly_and_private.png

PHP 8.1 readonly properties cannot be set from global space, but they can be forced from the host class, just like accessing private properties. 

It doesn't work outside the host class : not in global space, not in a derived class.

Besides that, readonly act as usual : it is only possible to assign the property once.

See Also
________

* `Readonly properties <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties>`_
* `Visibility <https://www.php.net/manual/en/language.oop5.visibility.php>`_
* `Class Invasation <https://php-dictionary.readthedocs.io/en/latest/dictionary.html#class-invasion>`_
* `closure factorial <https://3v4l.org/v6hH9>`_ [Try me]


PHP Features
____________

* `readonly <https://php-dictionary.readthedocs.io/en/latest/dictionary/readonly.ini.html>`_

* `private <https://php-dictionary.readthedocs.io/en/latest/dictionary/private.ini.html>`_


