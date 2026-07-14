.. _exponential-minus-one:

Exponential Minus One
---------------------

.. meta::
	:description:
		Exponential Minus One: You can save typing by using ``expm1($x)`` instead of ``exp($x) - 1``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exponential Minus One
	:twitter:description: Exponential Minus One: You can save typing by using ``expm1($x)`` instead of ``exp($x) - 1``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/exp_minus_one.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/exp_minus_one.png
	:og:title: Exponential Minus One
	:og:type: article
	:og:description: You can save typing by using ``expm1($x)`` instead of ``exp($x) - 1``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/exp_minus_one.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/exp_minus_one.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/exp_minus_one.html","name":"Exponential Minus One","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:37+00:00","dateModified":"2026-07-14T14:31:37+00:00","description":"You can save typing by using ``expm1($x)`` instead of ``exp($x) - 1``","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/exp_minus_one.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   
   echo expm1(1);
   echo PHP_EOL;
   echo exp(1) - 1;


You can save typing by using ``expm1($x)`` instead of ``exp($x) - 1``. Also, you might have to take care of differences, as both results might be slightly different depending on the OS you're running it on : Debian is OK, but MacOS says it's different.

See Also
________

* `expm1() (PHP manual) <https://www.php.net/expm1>`_
* `exp() minus one? <https://3v4l.org/JNg4p>`_ [Try me]
* `expm1() versus exp() - 1 <https://3v4l.org/s2Y5G>`_ [Try me]


PHP Features
____________

* `math <https://php-dictionary.readthedocs.io/en/latest/dictionary/math.ini.html>`_

* `exponent <https://php-dictionary.readthedocs.io/en/latest/dictionary/exponent.ini.html>`_



Last updated: 14 July 2026