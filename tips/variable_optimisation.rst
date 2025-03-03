.. _no-warning-for-unused-variables:

No Warning For Unused Variables
-------------------------------

.. meta::
	:description:
		No Warning For Unused Variables: PHP variable optimisation in action: the undefined variables are only reported when they are used.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Warning For Unused Variables
	:twitter:description: No Warning For Unused Variables: PHP variable optimisation in action: the undefined variables are only reported when they are used
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/variable_optimisation.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/variable_optimisation.png
	:og:title: No Warning For Unused Variables
	:og:type: article
	:og:description: PHP variable optimisation in action: the undefined variables are only reported when they are used
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/variable_optimisation.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/variable_optimisation.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/variable_optimisation.html","name":"No Warning For Unused Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Mar 2025 20:15:57 +0000","dateModified":"Mon, 03 Mar 2025 20:15:57 +0000","description":"PHP variable optimisation in action: the undefined variables are only reported when they are used","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/variable_optimisation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP variable optimisation in action: the undefined variables are only reported when they are used.



The first is omitted : there are no operations.

The second is skipped : no need to execute the second term of the ``or``.

The third is reporting a warning.

Of course, an assignation is not reported with an undefined variable, as it will be set. Although, may be reusage of a variable could be reported.

.. image:: ../images/variable_optimisation.png

See Also
________

* `Variables (PHP manual) <https://www.php.net/manual/en/language.variables.php>`_
* `Variable optimisation <https://3v4l.org/HJKbV>`_

