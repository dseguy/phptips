.. _try,-catch,-finally-are-all-optional:

try, catch, finally Are All Optional
------------------------------------

.. meta::
	:description:
		try, catch, finally Are All Optional: The finally clause in a try-catch-finally is actually optional: it can be omitted.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: try, catch, finally Are All Optional
	:twitter:description: try, catch, finally Are All Optional: The finally clause in a try-catch-finally is actually optional: it can be omitted
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/try-catch-finally.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/try-catch-finally.png
	:og:title: try, catch, finally Are All Optional
	:og:type: article
	:og:description: The finally clause in a try-catch-finally is actually optional: it can be omitted
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/try-catch-finally.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/try-catch-finally.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/try-catch-finally.html","name":"try, catch, finally Are All Optional","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Feb 2025 15:38:51 +0000","dateModified":"Thu, 20 Feb 2025 15:38:51 +0000","description":"The finally clause in a try-catch-finally is actually optional: it can be omitted","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/try-catch-finally.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

The finally clause in a try-catch-finally is actually optional: it can be omitted.

The catch clauses in a try-catch-finally are also optional: they can be omitted.

When the catch and finally clauses are all omitted, the try clause can also be omitted safely.

.. image:: ../images/try-catch-finally.png

See Also
________

* `Exceptions (PHP manual) <https://www.php.net/manual/en/language.exceptions.php>`_
* ` <>`_

