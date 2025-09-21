.. _catch-on-interfaces:

Catch On Interfaces
-------------------

.. meta::
	:description:
		Catch On Interfaces: Exceptions can be caught using their interfaces rather than their specific class names or parent classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Catch On Interfaces
	:twitter:description: Catch On Interfaces: Exceptions can be caught using their interfaces rather than their specific class names or parent classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/catch_interfaces.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/catch_interfaces.png
	:og:title: Catch On Interfaces
	:og:type: article
	:og:description: Exceptions can be caught using their interfaces rather than their specific class names or parent classes
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/catch_interfaces.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/catch_interfaces.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/catch_interfaces.html","name":"Catch On Interfaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 23 Jun 2025 20:21:19 +0000","dateModified":"Mon, 23 Jun 2025 20:21:19 +0000","description":"Exceptions can be caught using their interfaces rather than their specific class names or parent classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/catch_interfaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/catch_interfaces.png

Exceptions can be caught using their interfaces rather than their specific class names or parent classes. This introduces polymorphism to exception handling, allowing the same exception to be caught in multiple ways. By targeting interfaces, developers gain flexibility in managing errors, especially when different exception types share common behavior defined by a shared interface.

See Also
________

* `Exceptions (PHP manual) <https://www.php.net/manual/en/language.exceptions.php>`_
* `Catching an interface <https://3v4l.org/JfE8M>`_ [Try me]


PHP Features
____________

* `interface <https://php-dictionary.readthedocs.io/en/latest/dictionary/interface.ini.html>`_

* `try-catch <https://php-dictionary.readthedocs.io/en/latest/dictionary/try-catch.ini.html>`_


