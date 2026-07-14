.. _isset-empty-and-the-magic-methods:

isset(), empty() And the Magic Methods
--------------------------------------

.. meta::
	:description:
		isset(), empty() And the Magic Methods: The ``__isset()`` and ``__get()`` methods must go hand in hand.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: isset(), empty() And the Magic Methods
	:twitter:description: isset(), empty() And the Magic Methods: The ``__isset()`` and ``__get()`` methods must go hand in hand
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/isset-empty-valued.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/isset-empty-valued.png
	:og:title: isset(), empty() And the Magic Methods
	:og:type: article
	:og:description: The ``__isset()`` and ``__get()`` methods must go hand in hand
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/isset-empty-valued.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/isset-empty-valued.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/isset-empty-valued.html","name":"isset(), empty() And the Magic Methods","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:09+00:00","dateModified":"2026-07-14T14:32:09+00:00","description":"The ``__isset()`` and ``__get()`` methods must go hand in hand","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/isset-empty-valued.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x {
       private array $config = array();
       
       function __isset($name) {
               print __METHOD__." ".$name.PHP_EOL;
           return isset($this->config[$name]);
       }
   
           function __get($name) {
               print __METHOD__." ".$name.PHP_EOL;
               return 'a';
       }
   
   }
   
   
   $x = new x;
   var_dump(isset($x->a));
   var_dump(empty($x->a));


The ``__isset()`` and ``__get()`` methods must go hand in hand. One checks that a property, virtual or not, is available, and the other one returns the actual value. Yet, both may be inconsistent one with the other.

In particular, ``__isset()`` is called when dealing with ``isset()`` and ``empty()``.

But ``__get()`` may be called directly, and return something, even if ``__isset()`` is saying it's not set.

This might come as a surprise to pieces of code that compare a property with ``== ''`` (or equivalent), compared to using ``isset()``.

Beyond the strange illustration, it is probably a good practice to always provide ``__isset()`` on a class that has the magic method ``__get``.

See Also
________

* `isset, empty and get are on a boat <https://3v4l.org/Eiumt>`_ [Try me]


PHP Features
____________

* `__get <https://php-dictionary.readthedocs.io/en/latest/dictionary/__get.ini.html>`_

* `__isset <https://php-dictionary.readthedocs.io/en/latest/dictionary/__isset.ini.html>`_

* `empty <https://php-dictionary.readthedocs.io/en/latest/dictionary/empty.ini.html>`_

* `isset <https://php-dictionary.readthedocs.io/en/latest/dictionary/isset.ini.html>`_



Last updated: 14 July 2026