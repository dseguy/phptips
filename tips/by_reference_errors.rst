.. _by-reference,-error-or-notice?:

By Reference, Error Or Notice?
------------------------------

.. meta::
	:description:
		By Reference, Error Or Notice?: Passing a literal, by reference, to a method yields a Fatal error.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: By Reference, Error Or Notice?
	:twitter:description: By Reference, Error Or Notice?: Passing a literal, by reference, to a method yields a Fatal error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/by_reference_errors.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/by_reference_errors.png
	:og:title: By Reference, Error Or Notice?
	:og:type: article
	:og:description: Passing a literal, by reference, to a method yields a Fatal error
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/by_reference_errors.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/by_reference_errors.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/by_reference_errors.html","name":"By Reference, Error Or Notice?","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Dec 2024 13:00:10 +0000","dateModified":"Thu, 19 Dec 2024 13:00:10 +0000","description":"Passing a literal, by reference, to a method yields a Fatal error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/by_reference_errors.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Passing a literal, by reference, to a method yields a Fatal error.

Returning a literal by reference, yields a Notice.

Why is there a difference of error level between these two operations, which are very similar?

.. image:: ../images/by_reference_errors.png

See Also
________

* `Passing By Reference (PHP manual) <https://www.php.net/manual/en/language.references.pass.php>`_

