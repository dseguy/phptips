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

PHP lint detects early to avoid 'redeclared functions', based on local compilation.

php -l => Cannot redeclare mb_substr() 

It doesn't apply to CIT until execution though : 

php => Cannot declare class stdClass

because the name is already in use.

.. image:: ../images/check_for_names.png

