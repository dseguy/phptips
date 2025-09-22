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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_all_strings.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_all_strings.html","name":"Not All Strings In Arrays","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 22 Sep 2025 19:18:18 +0000","dateModified":"Mon, 22 Sep 2025 19:18:18 +0000","description":"Array keys are coerced into strings or integers, while array values are left intact","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/not_all_strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/not_all_strings.png

Array keys are coerced into strings or integers, while array values are left intact.

Yet, this doesn't apply to array keys, so this code will display an ``Uncaught TypeError: Illegal offset type``, even without ``strict_types``.

This code needs an explicit cast to string to work.

See Also
________

* `__toString() Magic Method <https://www.php.net/manual/fr/language.oop5.magic.php#object.tostring>`_
* `string or not? <https://3v4l.org/CfEaW>`_ [Try me]


PHP Features
____________

* `type-juggling <https://php-dictionary.readthedocs.io/en/latest/dictionary/type-juggling.ini.html>`_

* `string <https://php-dictionary.readthedocs.io/en/latest/dictionary/string.ini.html>`_

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_


