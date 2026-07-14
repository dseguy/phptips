.. _recycle-generator:

Recycle Generator
-----------------

.. meta::
	:description:
		Recycle Generator: After creating a generator, it is possible to nest it and run the same geenrator twice.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Recycle Generator
	:twitter:description: Recycle Generator: After creating a generator, it is possible to nest it and run the same geenrator twice
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/recycle_generator.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/recycle_generator.png
	:og:title: Recycle Generator
	:og:type: article
	:og:description: After creating a generator, it is possible to nest it and run the same geenrator twice
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/recycle_generator.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recycle_generator.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recycle_generator.html","name":"Recycle Generator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:12 +0000","dateModified":"Tue, 14 Jul 2026 14:33:12 +0000","description":"After creating a generator, it is possible to nest it and run the same geenrator twice","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recycle_generator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $g = function (): Generator {
       yield from [1,2,3,4];
   };
   
   foreach($g() as $h) {
       print "h:$h - ";
       foreach($g() as $i) {
           echo "i:$i + ";
           
           break 1;
       }
   }


After creating a generator, it is possible to nest it and run the same geenrator twice. It is the role of the functioncall ``$g()``, which actually creates the data source for the loop. Hence, here, the generator is always fresh at the start of the nested loop.

It would be possible to create the datasource before the loop and nest it, though it breaks at the second loop.

See Also
________

* `nesting generators <https://3v4l.org/cF28h#v8.5.6>`_ [Try me]
* `Not nesting generators <https://3v4l.org/J6iLN#v8.5.6>`_ [Try me]


PHP Error Messages
__________________

* `Cannot rewind a generator that was already run <https://php-errors.readthedocs.io/en/latest/messages/cannot-rewind-a-generator-that-was-already-run.html>`_



PHP Features
____________

* `generator <https://php-dictionary.readthedocs.io/en/latest/dictionary/generator.ini.html>`_

* `nesting <https://php-dictionary.readthedocs.io/en/latest/dictionary/nesting.ini.html>`_

* `foreach <https://php-dictionary.readthedocs.io/en/latest/dictionary/foreach.ini.html>`_


