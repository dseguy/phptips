.. _easy-map:

Easy Map
--------

.. meta::
	:description:
		Easy Map: array_column() extracts a property or an index in an array of objects or arrays.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Easy Map
	:twitter:description: Easy Map: array_column() extracts a property or an index in an array of objects or arrays
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/easy_map.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/easy_map.png
	:og:title: Easy Map
	:og:type: article
	:og:description: array_column() extracts a property or an index in an array of objects or arrays
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/easy_map.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/easy_map.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/easy_map.html","name":"Easy Map","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:28 +0000","dateModified":"Tue, 14 Jul 2026 14:31:28 +0000","description":"array_column() extracts a property or an index in an array of objects or arrays","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/easy_map.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
     
     class X {
        public function __construct(
   	     public $id,
       	 public $name,
        ) {}
     }
   
     $list = [];
     foreach(range(0, 10) as $i) {
        $list[] = new X(rand(0, 1000_000), 'name '.$i);
     }
     
     $map = array_column($list, null, 'id');
   
     print_r($map)  ;
     
   ?>


array_column() extracts a property or an index in an array of objects or arrays. It also accepts ``null`` as second argument: this represents the original object or array, as a whole.

Combined with the third argument, it makes a convenient one-liner to build a map, based on a list of objects or arrays.

See Also
________

* `array_column (PHP manual) <https://www.php.net/manual/en/function.array-column.php>`_
* `Easy mapping <https://3v4l.org/F0CR0>`_ [Try me]


PHP Features
____________

* `array_column <https://php-dictionary.readthedocs.io/en/latest/dictionary/array_column.ini.html>`_

* `null <https://php-dictionary.readthedocs.io/en/latest/dictionary/null.ini.html>`_


