.. _returning-void:

Returning Void
--------------

.. meta::
	:description:
		Returning Void: A very large majority think that it doesn’t cause an error and yet, it does.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Returning Void
	:twitter:description: Returning Void: A very large majority think that it doesn’t cause an error and yet, it does
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/returningVoid.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/returningVoid.png
	:og:title: Returning Void
	:og:type: article
	:og:description: A very large majority think that it doesn’t cause an error and yet, it does
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/returningVoid.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/returningVoid.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/returningVoid.html","name":"Returning Void","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 21 Oct 2025 20:16:03 +0000","dateModified":"Tue, 21 Oct 2025 20:16:03 +0000","description":"A very large majority think that it doesn\u2019t cause an error and yet, it does","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/returningVoid.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Frederic Bouchery <https://bsky.app/profile/bouchery.fr>`_

.. image:: ../images/returningVoid.png

A very large majority think that it doesn’t cause an error and yet, it does. PHP raises a fatal error during the compilation phase when the return type is “void” but the function contains return statements with values.

See Also
________

* `Void (PHP manual) <https://www.php.net/manual/en/language.types.void.php>`_
* `Double Return <https://3v4l.org/W38En>`_ [Try me]


PHP Error Messages
__________________

* `A void function must not return a value (did you mean "return;" instead of "return null;"?) <https://php-errors.readthedocs.io/en/latest/messages/a-void-%25s-must-not-return-a-value.html>`_



PHP Features
____________

* `return <https://php-dictionary.readthedocs.io/en/latest/dictionary/return.ini.html>`_

* `void <https://php-dictionary.readthedocs.io/en/latest/dictionary/void.ini.html>`_


