.. _constant-redefinition:

Constant Redefinition
---------------------

.. meta::
	:description:
		Constant Redefinition: It is possible to specify several identical global constant definition: PHP reports a warning, and ignores the second definitions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant Redefinition
	:twitter:description: Constant Redefinition: It is possible to specify several identical global constant definition: PHP reports a warning, and ignores the second definitions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/constant_redefinition.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/constant_redefinition.png
	:og:title: Constant Redefinition
	:og:type: article
	:og:description: It is possible to specify several identical global constant definition: PHP reports a warning, and ignores the second definitions
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/constant_redefinition.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constant_redefinition.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constant_redefinition.html","name":"Constant Redefinition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jan 2025 14:04:24 +0000","dateModified":"Tue, 14 Jan 2025 14:04:24 +0000","description":"It is possible to specify several identical global constant definition: PHP reports a warning, and ignores the second definitions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constant_redefinition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

It is possible to specify several identical global constant definition: PHP reports a warning, and ignores the second definitions.

On the other hand, a duplicate class constant definition is a fatal error, and fails the compilation phase.

The difference of behavior may be linked to the level of consistence that PHP can achieve: global constants needs an application wide check for name unicity, while class constants can be checked while compiling a class.

Yet, it might be worth looking into leveling both errors, to avoid hard to find bugs.

.. image:: ../images/constant_redefinition.png

See Also
________

* `Constants (PHP manual) <https://www.php.net/manual/en/language.constants.php>`_
* `Redefinition of a constant <https://3v4l.org/mHLNu>`_

