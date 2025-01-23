.. _internal-static-call:

Internal Static Call
--------------------

.. meta::
	:description:
		Internal Static Call: Trap of the day : one of the calls in bar() will generate a 'Non-static method a::foo() cannot be called statically' error.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Internal Static Call
	:twitter:description: Internal Static Call: Trap of the day : one of the calls in bar() will generate a 'Non-static method a::foo() cannot be called statically' error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/internal_static_call.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/internal_static_call.png
	:og:title: Internal Static Call
	:og:type: article
	:og:description: Trap of the day : one of the calls in bar() will generate a 'Non-static method a::foo() cannot be called statically' error
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/internal_static_call.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/internal_static_call.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/internal_static_call.html","name":"Internal Static Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 14 Mar 2024 20:41:01 +0000","dateModified":"Thu, 14 Mar 2024 20:41:00 +0000","description":"Trap of the day : one of the calls in bar() will generate a 'Non-static method a::foo() cannot be called statically' error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/internal_static_call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Trap of the day : one of the calls in bar() will generate a 'Non-static method a::foo() cannot be called statically' error. 

Which one? It is the d::foo(). All other calls are made within the C class : internal calls may use static or normal syntax, while external calls must use the correct call syntax. This allows calls like 'parent::__construct()'. 

When the call to bar() is made with '(new d)', the 'd::foo()' works again.

.. image:: ../images/internal_static_call.png

* `Late Static Bindings (PHP manual) <https://www.php.net/manual/en/language.oop5.late-static-bindings.php>`_


