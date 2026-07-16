.. _explode-negative-third-argument:

explode() negative third argument
---------------------------------

.. meta::
	:description:
		explode() negative third argument: The third argument of explode() is a hidden gem.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: explode() negative third argument
	:twitter:description: explode() negative third argument: The third argument of explode() is a hidden gem
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/explode_third_arg.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/explode_third_arg.png
	:og:title: explode() negative third argument
	:og:type: article
	:og:description: The third argument of explode() is a hidden gem
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/explode_third_arg.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/explode_third_arg.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/explode_third_arg.html","name":"explode() negative third argument","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-16T06:07:31+00:00","dateModified":"2026-07-16T06:07:31+00:00","description":"The third argument of explode() is a hidden gem","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/explode_third_arg.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $string = 'a,b,c,d,e';
   
   print_r(explode(',', $string, 3));
   print_r(explode(',', $string, 0));
   print_r(explode(',', $string, -2));


The third argument of explode() is a hidden gem.

When passed as a positive integer, it limits the number of part in the returned array. When it reaches the limit, it saves everything else in the last returned string. It saves on memory and processing time, when there are many separators in a long string.

When passed 0, explode() does nothing. This is not too useful, but it makes sense.

When passed a negative number, explode() limits the number of returned parts to that number, starting from the end. It also means that the last returned strings do not contain the separator anymore, unlike when passing a positive integer.

See Also
________

* `exploding tricks <https://3v4l.org/emDh3#v>`_ [Try me]


PHP Features
____________

* `explode <https://php-dictionary.readthedocs.io/en/latest/dictionary/explode.ini.html>`_

* `memory_limit <https://php-dictionary.readthedocs.io/en/latest/dictionary/memory_limit.ini.html>`_



Last updated: 16 July 2026