.. _not-all-strings-in-arrays:

Not All Strings In Arrays
-------------------------

.. meta::
	:description:
		Not All Strings In Arrays: Array keys are coerced into strings or integers, while array values are left intact.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Not All Strings In Arrays
	:twitter:description: Not All Strings In Arrays: Array keys are coerced into strings or integers, while array values are left intact
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/not_all_strings.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/not_all_strings.png
	:og:title: Not All Strings In Arrays
	:og:type: article
	:og:description: Array keys are coerced into strings or integers, while array values are left intact
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/not_all_strings.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_all_strings.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_all_strings.html","name":"Not All Strings In Arrays","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 03 Nov 2024 09:31:43 +0000","dateModified":"Sun, 03 Nov 2024 09:31:43 +0000","description":"Array keys are coerced into strings or integers, while array values are left intact","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_all_strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Array keys are coerced into strings or integers, while array values are left intact.

Yet, this doesn't apply to array keys, so this code will display an 'Uncaught TypeError: Illegal offset type', even without strict_types.

This code needs an explicit cast to string to work.

.. image:: ../images/not_all_strings.png

See Also
________

* `Array: syntax (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_
* `__toString() Magic Method <https://www.php.net/manual/fr/language.oop5.magic.php#object.tostring>`_

