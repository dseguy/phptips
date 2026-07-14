.. _e-and-euler:

e And Euler
-----------

.. meta::
	:description:
		e And Euler: PHP has two distinct constants: ``M_E``, which stands for the mathematical ``e`` exponential constant, and with a value of ``2.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: e And Euler
	:twitter:description: e And Euler: PHP has two distinct constants: ``M_E``, which stands for the mathematical ``e`` exponential constant, and with a value of ``2
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/e_and_euler.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/e_and_euler.png
	:og:title: e And Euler
	:og:type: article
	:og:description: PHP has two distinct constants: ``M_E``, which stands for the mathematical ``e`` exponential constant, and with a value of ``2
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/e_and_euler.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/e_and_euler.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/e_and_euler.html","name":"e And Euler","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:28 +0000","dateModified":"Tue, 14 Jul 2026 14:31:28 +0000","description":"PHP has two distinct constants: ``M_E``, which stands for the mathematical ``e`` exponential constant, and with a value of ``2","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/e_and_euler.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
       echo M_E; 
       echo PHP_EOL;
       echo M_EULER;


PHP has two distinct constants: ``M_E``, which stands for the mathematical ``e`` exponential constant, and with a value of ``2.718281828459``.

And the lesser known ``M_EULER``, which stand for the Euler constant. It is used to estimate the number of tests runs to execute when randomly running one of the tests. It is the classic ``coupon collector`` problem: ``E(n) ≈ n * ln(n) + γ * n``.

See Also
________

* `The emperor has three thousand beauties in his harem. <https://www.zhihu.com/en/answer/162346894>`_
* `Euler's constant <https://en.wikipedia.org/wiki/Euler%27s_constant>`_
* `M_E and M_EULER <https://3v4l.org/covqi#veol>`_ [Try me]


PHP Features
____________

* `math <https://php-dictionary.readthedocs.io/en/latest/dictionary/math.ini.html>`_

* `constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/constant.ini.html>`_


