.. _float-precision:

Float Precision
---------------

.. meta::
	:description:
		Float Precision: PHP has a ``precision`` directive that controls the number of decimals displayed by float values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Float Precision
	:twitter:description: Float Precision: PHP has a ``precision`` directive that controls the number of decimals displayed by float values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/precision.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/precision.png
	:og:title: Float Precision
	:og:type: article
	:og:description: PHP has a ``precision`` directive that controls the number of decimals displayed by float values
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/precision.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/precision.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/precision.html","name":"Float Precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:02 +0000","dateModified":"Tue, 14 Jul 2026 14:33:02 +0000","description":"PHP has a ``precision`` directive that controls the number of decimals displayed by float values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   echo 1/7;
   // 0.14285714285714
   
   ini_set('precision', 2);
   echo 1/7;
   // 0.14
   
   ini_set('precision', 200);
   echo 1/7;
   // 0.142857142857142849212692681248881854116916656494140625 (php)
   // 0.142857142857142857142857142857142857142857142857142857 (real)
   // garbage starts at 18 and stops at 54
   
   ?>


PHP has a ``precision`` directive that controls the number of decimals displayed by float values. This is used with echo (and co), but also with cast to string.

It default to 14, and peaks at 18, and gives up at 54. Use ``gmp`` or ``bcmath`` for large numbers.

When changing it, don't forget to reset it to default, unless you like to puzzle people.

See Also
________

* `precision (PHP manual) <https://www.php.net/manual/en/ini.core.php#ini.precision>`_
* `precision <https://3v4l.org/N2EnC>`_ [Try me]


PHP Features
____________

* `integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/integer.ini.html>`_

* `gmp <https://php-dictionary.readthedocs.io/en/latest/dictionary/gmp.ini.html>`_

* `bcmath <https://php-dictionary.readthedocs.io/en/latest/dictionary/bcmath.ini.html>`_


