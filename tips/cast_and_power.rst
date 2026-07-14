.. _casting-and-power:

Casting And Power
-----------------

.. meta::
	:description:
		Casting And Power: When you know that ``2*2 = 4``, and ``2**2 = 4`` (too), and ``2.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Casting And Power
	:twitter:description: Casting And Power: When you know that ``2*2 = 4``, and ``2**2 = 4`` (too), and ``2
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/cast_and_power.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/cast_and_power.png
	:og:title: Casting And Power
	:og:type: article
	:og:description: When you know that ``2*2 = 4``, and ``2**2 = 4`` (too), and ``2
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/cast_and_power.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_and_power.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_and_power.html","name":"Casting And Power","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:30:53 +0000","dateModified":"Tue, 14 Jul 2026 14:30:53 +0000","description":"When you know that ``2*2 = 4``, and ``2**2 = 4`` (too), and ``2","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_and_power.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $a = 2.5;
   $b = 2.5;
   
   print (int) $a * (int) $b;  // 4
   
   print PHP_EOL;
   
   print (int) $a ** (int) $b; // 6
   
   ?>


When you know that ``2*2 = 4``, and ``2**2 = 4`` (too), and ``2.5 ** 2.5 = 9.8821176880262``, you have to ask yourself where is this 6 coming from.

The answer is in the precedence. Casting has higher precedence than multiplication, so cast is done first (2.5 -> 2) then multiplication. This gives the first 4.

Then, power, ``**``, as higher precedence than casting, so the second expression gives first ``2.5 ** 2``, which is 6.25, and then, cast it again as an integer, hence 6.

It's a good thing that power is so little used.

See Also
________

* `Cast And Power <https://3v4l.org/ciEvM>`_ [Try me]


PHP Features
____________

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_

* `exponent <https://php-dictionary.readthedocs.io/en/latest/dictionary/exponent.ini.html>`_

* `precedence <https://php-dictionary.readthedocs.io/en/latest/dictionary/precedence.ini.html>`_


