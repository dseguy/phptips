.. _invoke-on-new:

__invoke() On New
-----------------

.. meta::
	:description:
		__invoke() On New: It is possible to create a new object by calling new on a previous object: PHP fetches the name of the class, then its constructor.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __invoke() On New
	:twitter:description: __invoke() On New: It is possible to create a new object by calling new on a previous object: PHP fetches the name of the class, then its constructor
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/invoke_on_new.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/invoke_on_new.png
	:og:title: __invoke() On New
	:og:type: article
	:og:description: It is possible to create a new object by calling new on a previous object: PHP fetches the name of the class, then its constructor
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/invoke_on_new.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invoke_on_new.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invoke_on_new.html","name":"__invoke() On New","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:07+00:00","dateModified":"2026-07-14T14:32:07+00:00","description":"It is possible to create a new object by calling new on a previous object: PHP fetches the name of the class, then its constructor","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invoke_on_new.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x {
       function __construct($i = 0) { echo __METHOD__.PHP_EOL;}
       
       function __invoke()          { echo __METHOD__.PHP_EOL;}
   }
   
   $x = new x;
   
   $y = new $x()();
   // identical to 
   //$y = (new $x(0)) ()
   
   var_dump($y);
   // NULL 
   
   ?>


It is possible to create a new object by calling new on a previous object: PHP fetches the name of the class, then its constructor.

With the PHP 8.4 new syntax without parenthesis, it is also possible to chain the instantiation with a direct call. This calls the ``__invoke`` method.

This was not possible in previous versions.

See Also
________

* `PHP __invoke <https://www.phptutorial.net/php-oop/php-__invoke/>`_
* `invoke on new <https://3v4l.org/7G8C7>`_ [Try me]


PHP Features
____________

* `__invoke <https://php-dictionary.readthedocs.io/en/latest/dictionary/__invoke.ini.html>`_

* `new <https://php-dictionary.readthedocs.io/en/latest/dictionary/new.ini.html>`_



Last updated: 14 July 2026