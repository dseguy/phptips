.. _missing-methods-are-fatal:

Missing Methods Are Fatal
-------------------------

.. meta::
	:description:
		Missing Methods Are Fatal: Calling a missing method is a fatal error.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Missing Methods Are Fatal
	:twitter:description: Missing Methods Are Fatal: Calling a missing method is a fatal error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/missing_methods_are_fatal.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/missing_methods_are_fatal.png
	:og:title: Missing Methods Are Fatal
	:og:type: article
	:og:description: Calling a missing method is a fatal error
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/missing_methods_are_fatal.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/missing_methods_are_fatal.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/missing_methods_are_fatal.html","name":"Missing Methods Are Fatal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 07:00:03 +0000","dateModified":"Fri, 27 Jun 2025 07:00:03 +0000","description":"Calling a missing method is a fatal error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/missing_methods_are_fatal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Calling a missing method is a fatal error. Reading a missing property is a warning, and defaults to NULL. Writing to an undefined property is deprecated in PHP 8.3, and will become a fatal error in PHP 9.0. This means that both errors will have the same impact in the code.

.. image:: ../images/missing_methods_are_fatal.png

See Also
________

* `Properties (PHP manual) <https://www.php.net/manual/en/language.oop5.properties.php>`_
* `Don't miss the method' <https://3v4l.org/Sd9sr>`_ [Try me]

