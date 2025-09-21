.. _constants-can-be-impossible:

Constants Can Be Impossible
---------------------------

.. meta::
	:description:
		Constants Can Be Impossible: In this code, the constant ``x2::F`` is not possible, because adding a string and an array results in a fatal error.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constants Can Be Impossible
	:twitter:description: Constants Can Be Impossible: In this code, the constant ``x2::F`` is not possible, because adding a string and an array results in a fatal error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/when_a_constant_is_impossible.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/when_a_constant_is_impossible.png
	:og:title: Constants Can Be Impossible
	:og:type: article
	:og:description: In this code, the constant ``x2::F`` is not possible, because adding a string and an array results in a fatal error
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/when_a_constant_is_impossible.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/when_a_constant_is_impossible.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/when_a_constant_is_impossible.html","name":"Constants Can Be Impossible","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 06 Aug 2025 17:01:46 +0000","dateModified":"Wed, 06 Aug 2025 17:01:46 +0000","description":"In this code, the constant ``x2::F`` is not possible, because adding a string and an array results in a fatal error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/when_a_constant_is_impossible.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/when_a_constant_is_impossible.png

In this code, the constant ``x2::F`` is not possible, because adding a string and an array results in a fatal error.

Yet, this is determined at execution time, and only when the constant is used.

Since this constant is never used, its code is never executed, and it doesn't yield any error. PHP has optimized the error away.

See Also
________

* `Class Constants <https:\/\/www.php.net\/manual\/en\/language.oop5.constants.php>`_
* `Almost impossible constant <https://3v4l.org/J1JpE>`_ [Try me]


PHP Features
____________

* `static-expression <https://php-dictionary.readthedocs.io/en/latest/dictionary/static-expression.ini.html>`_

* `optimisation <https://php-dictionary.readthedocs.io/en/latest/dictionary/optimisation.ini.html>`_

* `edge-case <https://php-dictionary.readthedocs.io/en/latest/dictionary/edge-case.ini.html>`_

* `error <https://php-dictionary.readthedocs.io/en/latest/dictionary/error.ini.html>`_


