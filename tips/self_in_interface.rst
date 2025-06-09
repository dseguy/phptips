.. _self-in-an-interface:

Self In An Interface
--------------------

.. meta::
	:description:
		Self In An Interface: The keyword self in an interface represente that interface: it does not represent the host class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Self In An Interface
	:twitter:description: Self In An Interface: The keyword self in an interface represente that interface: it does not represent the host class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/self_in_interface.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/self_in_interface.png
	:og:title: Self In An Interface
	:og:type: article
	:og:description: The keyword self in an interface represente that interface: it does not represent the host class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/self_in_interface.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/self_in_interface.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/self_in_interface.html","name":"Self In An Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Jun 2025 20:02:13 +0000","dateModified":"Mon, 09 Jun 2025 20:02:13 +0000","description":"The keyword self in an interface represente that interface: it does not represent the host class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/self_in_interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

The keyword self in an interface represente that interface: it does not represent the host class. Hence, using self as return type means that the method must return an object that implements the type ``i``, not of the host class.

.. image:: ../images/self_in_interface.png

See Also
________

* `Scope Resolution Operator (::) <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`_
* `interface, not class <https://3v4l.org/DANG4>`_ [Try me]

