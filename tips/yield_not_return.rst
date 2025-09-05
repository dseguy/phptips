.. _yield,-not-return:

Yield, Not Return
-----------------

.. meta::
	:description:
		Yield, Not Return: This code displays ``1 2 3``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Yield, Not Return
	:twitter:description: Yield, Not Return: This code displays ``1 2 3``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/yield_not_return.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/yield_not_return.png
	:og:title: Yield, Not Return
	:og:type: article
	:og:description: This code displays ``1 2 3``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/yield_not_return.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_not_return.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_not_return.html","name":"Yield, Not Return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 03 Aug 2025 19:14:37 +0000","dateModified":"Sun, 03 Aug 2025 19:14:37 +0000","description":"This code displays ``1 2 3``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/yield_not_return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

This code displays ``1 2 3``. This is because the ``...`` operator acts as a ``foreach`` and runs the generator. It then spreads the values as arguments for the function call, and, in this case, it matches the needed arguments.

Note that named parameters are also supported, with the good PHP version.

The returned value of the generator is lost, in this case. If you need to access the returned values, you must get the generator, and call the ``getReturn()`` method.

.. image:: ../images/yield_not_return.png

See Also
________

* `Generators overview (PHP manual) <https://www.php.net/manual/en/language.generators.overview.php>`_
* `yield but not return on 3v4l.org <https://3v4l.org/DLIiA>`_ [Try me]


PHP Features
____________

* `ellipsis <https://php-dictionary.readthedocs.io/en/latest/dictionary/ellipsis.ini.html>`_

* `yield <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield.ini.html>`_

* `return <https://php-dictionary.readthedocs.io/en/latest/dictionary/return.ini.html>`_


