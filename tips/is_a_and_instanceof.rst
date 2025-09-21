.. _is_a()-versus-instanceof:

is_a() Versus Instanceof
------------------------

.. meta::
	:description:
		is_a() Versus Instanceof: is_a() and instanceof are the same feature: check if an object is of a specific class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: is_a() Versus Instanceof
	:twitter:description: is_a() Versus Instanceof: is_a() and instanceof are the same feature: check if an object is of a specific class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/is_a_and_instanceof.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/is_a_and_instanceof.png
	:og:title: is_a() Versus Instanceof
	:og:type: article
	:og:description: is_a() and instanceof are the same feature: check if an object is of a specific class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/is_a_and_instanceof.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/is_a_and_instanceof.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/is_a_and_instanceof.html","name":"is_a() Versus Instanceof","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 08:59:22 +0000","dateModified":"Sat, 28 Jun 2025 08:59:22 +0000","description":"is_a() and instanceof are the same feature: check if an object is of a specific class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/is_a_and_instanceof.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/is_a_and_instanceof.png

is_a() and instanceof are the same feature: check if an object is of a specific class. Yet, they do things in different ways.

Using the ::class operator is safe in both cases.

Using a name is a class name for instanceof, while it is a constant name with is_a(). This may lead to confusion.

See Also
________

* `is_a (PHP manual) <https://www.php.net/manual/en/is_a.php>`_
* `type operators (PHP manual) <https://www.php.net/manual/en/language.operators.type.php#language.operators.type>`_
* `is_a and instanceof are in a boat... <https://3v4l.org/ojvjm>`_ [Try me]


PHP Features
____________

* `type <https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html>`_

* `instanceof <https://php-dictionary.readthedocs.io/en/latest/dictionary/instanceof.ini.html>`_

* `is_a <https://php-dictionary.readthedocs.io/en/latest/dictionary/is_a.ini.html>`_


