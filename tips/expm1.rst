.. _expm1-and-log1p:

expm1() And log1p()
-------------------

.. meta::
	:description:
		expm1() And log1p(): In PHP, expm1() computes exp(x) - 1.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: expm1() And log1p()
	:twitter:description: expm1() And log1p(): In PHP, expm1() computes exp(x) - 1
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/expm1.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/expm1.png
	:og:title: expm1() And log1p()
	:og:type: article
	:og:description: In PHP, expm1() computes exp(x) - 1
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/expm1.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/expm1.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/expm1.html","name":"expm1() And log1p()","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:38+00:00","dateModified":"2026-07-14T14:31:38+00:00","description":"In PHP, expm1() computes exp(x) - 1","inLanguage":"en-US","author":{"@id":"https:\/\/x.com\/alexdaubois"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/expm1.html"]}]},{"@type":"Person","@id":"https:\/\/x.com\/alexdaubois","name":"Alexandre Daubois","url":"https:\/\/x.com\/alexdaubois","sameAs":["https:\/\/x.com\/alexdaubois"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Alexandre Daubois <https://x.com/alexdaubois>`_

.. code-block:: php

   <?php
   
   $x = 1e-15;
   
   // naive: catastrophic cancellation
   $native = exp($x) - 1;
   echo $native; // 1.1102230246252E-15, WRONG
   
   // expm1: computed without cancellation
   $precise = expm1($x);
   echo $precise; // 1.00000000000000005E-15, CORRECT
   
   // same problem in reverse
   $y = 1e-15;
   
   // naive
   echo log(1 + $y); // 1.1102230246252E-15, WRONG
   echo log1p($y);   // 1.00000000000000005E-15, CORRECT
   
   // real-world use: compound interest on tiny rates.
   $rate = 0.00001; // 0.001% daily rate
   $days = 365;
   
   // naive continuous compounding
   $wrong = exp($rate * $days) - 1;
   
   // precise
   $right = expm1($rate * $days);


In PHP, expm1() computes exp(x) - 1.

log1p() computes log(1 + x).

"Why not just write exp($x) - 1" you may ask...

Because when x is close to 0, floating point eats your precision alive. Think about it if you deal with finance!

These two functions exist solely to save your math from IEEE 754.

See Also
________

* `expm1 (PHP manual) <https://www.php.net/manual/en/function.expm1.php>`_
* `log1p (PHP manual) <https://www.php.net/manual/en/function.log1p.php>`_
* `exp (PHP manual) <https://www.php.net/manual/en/function.exp.php>`_
* `log (PHP manual) <https://www.php.net/manual/en/function.log.php>`_
* `IEEE 754 <https://en.wikipedia.org/wiki/IEEE_754>`_
* `expm1() And log1p() In A boat <https://3v4l.org/dm1Bh>`_ [Try me]


PHP Features
____________

* `exponential <https://php-dictionary.readthedocs.io/en/latest/dictionary/exponential.ini.html>`_

* `logarithm <https://php-dictionary.readthedocs.io/en/latest/dictionary/logarithm.ini.html>`_



Last updated: 14 July 2026