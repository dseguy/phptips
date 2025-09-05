.. _return-int-not-bool:

Return Int Not Bool
-------------------

.. meta::
	:description:
		Return Int Not Bool: There is a cute deprecation warning, when using a closure to sort an array: ``Deprecated: usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return Int Not Bool
	:twitter:description: Return Int Not Bool: There is a cute deprecation warning, when using a closure to sort an array: ``Deprecated: usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/return_int_not_bool.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/return_int_not_bool.png
	:og:title: Return Int Not Bool
	:og:type: article
	:og:description: There is a cute deprecation warning, when using a closure to sort an array: ``Deprecated: usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/return_int_not_bool.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/return_int_not_bool.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/return_int_not_bool.html","name":"Return Int Not Bool","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 04 Jun 2025 18:35:52 +0000","dateModified":"Wed, 04 Jun 2025 18:35:52 +0000","description":"There is a cute deprecation warning, when using a closure to sort an array: ``Deprecated: usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/return_int_not_bool.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

There is a cute deprecation warning, when using a closure to sort an array: ``Deprecated: usort(): Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero``.

And if this deprecation is ignored, the boolean is cast automatically to an integer. As PHP turns 0 to false, and everything else, including 1 and -1 to true, this leads to surprising sorting effect.

Just trust the deprecation notice.

.. image:: ../images/return_int_not_bool.png

See Also
________

* `usort (PHP manual) <https://www.php.net/manual/en/function.usort.php>`_
* `Comparison Operator <https://www.php.net/manual/en/language.operators.comparison.php>`_
* `Return an int <https://3v4l.org/BATHJ>`_ [Try me]


PHP Features
____________

* `closure <https://php-dictionary.readthedocs.io/en/latest/dictionary/closure.ini.html>`_

* `sort <https://php-dictionary.readthedocs.io/en/latest/dictionary/sort.ini.html>`_

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `comparison <https://php-dictionary.readthedocs.io/en/latest/dictionary/comparison.ini.html>`_

* `function <https://php-dictionary.readthedocs.io/en/latest/dictionary/function.ini.html>`_

* `return <https://php-dictionary.readthedocs.io/en/latest/dictionary/return.ini.html>`_

* `integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/integer.ini.html>`_

* `boolean <https://php-dictionary.readthedocs.io/en/latest/dictionary/boolean.ini.html>`_


