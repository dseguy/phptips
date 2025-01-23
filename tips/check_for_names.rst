.. _checking-for-names-at-different-times:

Checking For Names At Different Times
-------------------------------------

.. meta::
	:description:
		Checking For Names At Different Times: PHP lint detects early to avoid 'redeclared functions', based on local compilation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Checking For Names At Different Times
	:twitter:description: Checking For Names At Different Times: PHP lint detects early to avoid 'redeclared functions', based on local compilation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/check_for_names.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/check_for_names.png
	:og:title: Checking For Names At Different Times
	:og:type: article
	:og:description: PHP lint detects early to avoid 'redeclared functions', based on local compilation
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/check_for_names.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/check_for_names.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/check_for_names.html","name":"Checking For Names At Different Times","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Feb 2024 22:22:56 +0000","dateModified":"Tue, 20 Feb 2024 22:22:56 +0000","description":"PHP lint detects early to avoid 'redeclared functions', based on local compilation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/check_for_names.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP lint detects early to avoid 'redeclared functions', based on local compilation.

php -l => Cannot redeclare mb_substr() 

It doesn't apply to CIT until execution though : 

php => Cannot declare class stdClass

because the name is already in use.

.. image:: ../images/check_for_names.png

