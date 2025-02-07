.. _don't-forget-to-yield:

Don't Forget To Yield
---------------------

.. meta::
	:description:
		Don't Forget To Yield: It is possible to delegate a generator to another generator.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Don't Forget To Yield
	:twitter:description: Don't Forget To Yield: It is possible to delegate a generator to another generator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/dont_forget_yield.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/dont_forget_yield.png
	:og:title: Don't Forget To Yield
	:og:type: article
	:og:description: It is possible to delegate a generator to another generator
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dont_forget_yield.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/dont_forget_yield.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/dont_forget_yield.html","name":"Don't Forget To Yield","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 26 Nov 2024 21:57:11 +0000","dateModified":"Tue, 26 Nov 2024 21:57:11 +0000","description":"It is possible to delegate a generator to another generator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/dont_forget_yield.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

It is possible to delegate a generator to another generator.

One point to keep in mind is that they should not be called raw, as nothing happens.

And don't forget the ``from`` part of the keyword, otherwise, it yields the generator, instead of running it.

.. image:: ../images/dont_forget_yield.png

See Also
________

* `Generator syntax <https://www.php.net/manual/en/language.generators.syntax.php>`_

