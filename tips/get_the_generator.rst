.. _get-the-generator:

Get The Generator
-----------------

.. meta::
	:description:
		Get The Generator: It is possible to catch a generator when it is called, by putting it in a variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Get The Generator
	:twitter:description: Get The Generator: It is possible to catch a generator when it is called, by putting it in a variable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/get_the_generator.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/get_the_generator.png
	:og:title: Get The Generator
	:og:type: article
	:og:description: It is possible to catch a generator when it is called, by putting it in a variable
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/get_the_generator.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_the_generator.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_the_generator.html","name":"Get The Generator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jan 2025 17:30:08 +0000","dateModified":"Fri, 03 Jan 2025 17:30:08 +0000","description":"It is possible to catch a generator when it is called, by putting it in a variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_the_generator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

It is possible to catch a generator when it is called, by putting it in a variable. Once the generator has been used, it is possible to call a method such as ``getReturn`` on it.

This works with ``...`` and ``foreach``.

.. image:: ../images/get_the_generator.png

See Also
________

* `Generators overview (PHP manual) <https://www.php.net/manual/en/language.generators.overview.php>`_

