.. _exception-polyphormism:

Exception Polyphormism
----------------------

.. meta::
	:description:
		Exception Polyphormism: Custom exceptions are like any other classes: they may implements interfaces.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exception Polyphormism
	:twitter:description: Exception Polyphormism: Custom exceptions are like any other classes: they may implements interfaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/interface_exceptions.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/interface_exceptions.png
	:og:title: Exception Polyphormism
	:og:type: article
	:og:description: Custom exceptions are like any other classes: they may implements interfaces
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/interface_exceptions.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface_exceptions.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface_exceptions.html","name":"Exception Polyphormism","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Dec 2024 13:01:48 +0000","dateModified":"Thu, 19 Dec 2024 13:01:48 +0000","description":"Custom exceptions are like any other classes: they may implements interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface_exceptions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Custom exceptions are like any other classes: they may implements interfaces. Later, that interface may be used to catch the exception, even if the interface has nothing to do with exceptions. And with several interfaces on the same exception, it is possible to catch them in different ways.

.. image:: ../images/interface_exceptions.png

See Also
________

* `Exceptions <https://www.php.net/manual/en/language.exceptions.php>`_

