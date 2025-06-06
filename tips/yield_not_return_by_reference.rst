.. _yield,-not-return-by-reference:

Yield, Not Return By Reference
------------------------------

.. meta::
	:description:
		Yield, Not Return By Reference: When a method returns a reference, there is a ``&`` before its name, in the signature.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Yield, Not Return By Reference
	:twitter:description: Yield, Not Return By Reference: When a method returns a reference, there is a ``&`` before its name, in the signature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/yield_not_return_by_reference.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/yield_not_return_by_reference.png
	:og:title: Yield, Not Return By Reference
	:og:type: article
	:og:description: When a method returns a reference, there is a ``&`` before its name, in the signature
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/yield_not_return_by_reference.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_not_return_by_reference.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_not_return_by_reference.html","name":"Yield, Not Return By Reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 27 May 2025 05:08:25 +0000","dateModified":"Tue, 27 May 2025 05:08:25 +0000","description":"When a method returns a reference, there is a ``&`` before its name, in the signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_not_return_by_reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

When a method returns a reference, there is a ``&`` before its name, in the signature. This means that the function must return a variable, or a property, and not a literal value.

When the same ``&`` is added on a generator, this now means that the yielded values are by reference. On the other hand, the returned value mat be a literal value, without generating a warning.

.. image:: ../images/yield_not_return_by_reference.png

See Also
________

* `Generator syntax <https://www.php.net/manual/en/language.generators.syntax.php>`_
* `Returning value <https://www.php.net/manual/en/functions.returning-values.php>`_
* `Yield, Not Return By Reference on 3v4l.org <https://3v4l.org/NdQsv>`_ [Try me]
* `No reference for yield <https://3v4l.org/KQ4Nq>`_ [Try me]

