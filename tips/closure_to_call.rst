.. _closure-to-call:

Closure To Call
---------------

.. meta::
	:description:
		Closure To Call: The ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Closure To Call
	:twitter:description: Closure To Call: The ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/closure_to_call.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/closure_to_call.png
	:og:title: Closure To Call
	:og:type: article
	:og:description: The ``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/closure_to_call.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_to_call.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_to_call.html","name":"Closure To Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Apr 2025 17:54:56 +0000","dateModified":"Mon, 21 Apr 2025 17:54:56 +0000","description":"The ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_to_call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/closure_to_call.png

The ``...`` operator can be used to create a closure from a method. That closure can be called immediately, or used to create yet another closure. That processed is not guarded, so the ``(...)`` operator can be called multiple times, without any effect.

See Also
________

* `First Class Callable Syntax (PHP manual) <https://www.php.net/manual/en/functions.first_class_callable_syntax.php>`_
* `Define and call a closure <https://3v4l.org/mDFnh>`_ [Try me]


PHP Features
____________

* `self <https://php-dictionary.readthedocs.io/en/latest/dictionary/self.ini.html>`_

* `call <https://php-dictionary.readthedocs.io/en/latest/dictionary/call.ini.html>`_

* `ellipsis <https://php-dictionary.readthedocs.io/en/latest/dictionary/ellipsis.ini.html>`_


