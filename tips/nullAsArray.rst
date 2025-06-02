.. _null-or-boolean-as-array:

null Or Boolean As Array
------------------------

.. meta::
	:description:
		null Or Boolean As Array: Null and booleans support the array syntax, but always return NULL as value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: null Or Boolean As Array
	:twitter:description: null Or Boolean As Array: Null and booleans support the array syntax, but always return NULL as value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/nullAsArray.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/nullAsArray.png
	:og:title: null Or Boolean As Array
	:og:type: article
	:og:description: Null and booleans support the array syntax, but always return NULL as value
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/nullAsArray.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/nullAsArray.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/nullAsArray.html","name":"null Or Boolean As Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 11 May 2025 20:06:59 +0000","dateModified":"Sun, 11 May 2025 20:06:59 +0000","description":"Null and booleans support the array syntax, but always return NULL as value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/nullAsArray.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Null and booleans support the array syntax, but always return NULL as value. Since PHP 7.4, they also report a warning, as this is not good code.

Arrays also report errors when the key type is not valid, such as another array or an object.

Interestingly, Null and boolean accept illegal keys, with a simple warning.

.. image:: ../images/nullAsArray.png

See Also
________

* `Accessing index on literals <https://3v4l.org/flQ68>`_ [Try me]


PHP Error Messages
__________________

* `Trying to access array offset on null <https://php-errors.readthedocs.io/en/latest/messages/trying-to-access-array-offset-on-%25s.html>`_

* `Trying to access array offset on false <https://php-errors.readthedocs.io/en/latest/messages/trying-to-access-array-offset-on-%25s.html>`_

* `Trying to access array offset on true <https://php-errors.readthedocs.io/en/latest/messages/trying-to-access-array-offset-on-%25s.html>`_


