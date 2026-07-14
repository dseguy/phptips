.. _local-variable-cost:

Local Variable Cost
-------------------

.. meta::
	:description:
		Local Variable Cost: Local variables in PHP methods cost something.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Local Variable Cost
	:twitter:description: Local Variable Cost: Local variables in PHP methods cost something
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/local-variable-cost.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/local-variable-cost.png
	:og:title: Local Variable Cost
	:og:type: article
	:og:description: Local variables in PHP methods cost something
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/local-variable-cost.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/local-variable-cost.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/local-variable-cost.html","name":"Local Variable Cost","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:32:15 +0000","dateModified":"Tue, 14 Jul 2026 14:32:15 +0000","description":"Local variables in PHP methods cost something","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/local-variable-cost.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   ini_set('memory_limit', 2100000);
   
   function foo($i = 0) {
       print $i.PHP_EOL;
       foo($i + 1);
       $a = 2;
   }
   
   foo();


Local variables in PHP methods cost something. Not much, but a bit. And, more importantly, they cost memory even when not used.

Check this simplistic proof of concept: a recursive function, with one local variable. Not, let's run this script until it dies of memory exhaustion. For that to be a reasonable even, the ``memory_limit`` must be set as low as possible: 2.1Mb.

0 local variable: 10918

1 local variable: 8932

2 local variables: 7559

3 local variables: 6550

4 local variables: 5777

5 local variables: 5170

6 local variables: 4678

7 local variables: 4271

21 local variables: 2651

These values do not change with PHP versions: middle versions from 8.0 to 8.6 were tested (and 8.5 did seg fault on OSX)

Also, the numbers of iteration do not change with the default value, except when using an object as initial value.

The number of iteration did not change when a variable was initialized several times: ``$a = 1; $a = 1; $a = 1`` counted as three distinct variable allocation, as if they were distinct.

In the end, it is a micro-optimisation, as it needs thousands of calls to eat up 2M of RAM. But it might be interesting to monitor the number of local variables in a methods, as the worst offenders use up to 350 of them... That must count.

See Also
________

* `local variable cost <https://3v4l.org/bPXW4#v8.1.33>`_ [Try me]


PHP Features
____________

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_

* `micro-optimisation <https://php-dictionary.readthedocs.io/en/latest/dictionary/micro-optimisation.ini.html>`_

* `memory <https://php-dictionary.readthedocs.io/en/latest/dictionary/memory.ini.html>`_


