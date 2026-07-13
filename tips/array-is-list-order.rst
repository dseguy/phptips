.. _array_is_list-cares-about-order-not-just-keys:

array_is_list() Cares About Order, Not Just Keys
------------------------------------------------

.. meta::
	:description:
		array_is_list() Cares About Order, Not Just Keys: ``array_is_list()`` reads like it checks whether an array's keys are exactly ``{0, 1, 2, .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_is_list() Cares About Order, Not Just Keys
	:twitter:description: array_is_list() Cares About Order, Not Just Keys: ``array_is_list()`` reads like it checks whether an array's keys are exactly ``{0, 1, 2, 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/array-is-list-order.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/array-is-list-order.png
	:og:title: array_is_list() Cares About Order, Not Just Keys
	:og:type: article
	:og:description: ``array_is_list()`` reads like it checks whether an array's keys are exactly ``{0, 1, 2, 
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array-is-list-order.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-is-list-order.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-is-list-order.html","name":"array_is_list() Cares About Order, Not Just Keys","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 19:49:50 +0000","dateModified":"Sat, 11 Jul 2026 19:49:50 +0000","description":"``array_is_list()`` reads like it checks whether an array's keys are exactly ``{0, 1, 2, ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-is-list-order.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/array-is-list-order.png

``array_is_list()`` reads like it checks whether an array's keys are exactly ``{0, 1, 2, ...}``. That is close, but not quite what it does.

It actually walks the array in its internal, insertion order and checks that the keys come out as ``0, 1, 2, ...`` in sequence.

So an array with exactly the keys ``0`` and ``1``, inserted in the wrong order, is not a list: ``array_is_list([1 => 'a', 0 => 'b'])`` returns ``false``, even though the key set is identical to a fresh ``['b', 'a']``.

The fix, as usual, is ``array_values()``, which rebuilds the array in its current iteration order and always produces a list.

See Also
________

* `array_is_list (PHP manual) <https://www.php.net/manual/en/function.array-is-list.php>`_
* `array_values (PHP manual) <https://www.php.net/manual/en/function.array-values.php>`_


PHP Features
____________

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `array_is_list <https://php-dictionary.readthedocs.io/en/latest/dictionary/array_is_list.ini.html>`_

* `index-array <https://php-dictionary.readthedocs.io/en/latest/dictionary/index-array.ini.html>`_


