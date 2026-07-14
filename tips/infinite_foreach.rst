.. _infinite-foreach:

Infinite foreach()
------------------

.. meta::
	:description:
		Infinite foreach(): Foreach() is built against infinite loops: it works on a finite number of elements in arrays.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Infinite foreach()
	:twitter:description: Infinite foreach(): Foreach() is built against infinite loops: it works on a finite number of elements in arrays
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/infinite_foreach.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/infinite_foreach.png
	:og:title: Infinite foreach()
	:og:type: article
	:og:description: Foreach() is built against infinite loops: it works on a finite number of elements in arrays
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/infinite_foreach.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_foreach.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_foreach.html","name":"Infinite foreach()","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:55+00:00","dateModified":"2026-07-14T14:31:55+00:00","description":"Foreach() is built against infinite loops: it works on a finite number of elements in arrays","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/infinite_foreach.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $array = [0];
   
   foreach ($array as &$value) {
       print $value.PHP_EOL;
       $array[] = $value + 1;
   }


Foreach() is built against infinite loops: it works on a finite number of elements in arrays. Using an infinite generator is possible, but cheating with a second infinite loop.

So, the trick is to update the source array during the loop, to keep giving new keys to PHP, that it will check. Over, and over, and over.

See Also
________

* `Foreach (PHP manual) <https://www.php.net/manual/en/control-structures.foreach.php>`_
* `Infinite loops in PHP <https://www.exakat.io/infinite-loops-in-php/>`_
* `Infinite loop with Foreach() <https://3v4l.org/EdqjS>`_ [Try me]


PHP Features
____________

* `loop <https://php-dictionary.readthedocs.io/en/latest/dictionary/loop.ini.html>`_

* `foreach <https://php-dictionary.readthedocs.io/en/latest/dictionary/foreach.ini.html>`_



Last updated: 14 July 2026