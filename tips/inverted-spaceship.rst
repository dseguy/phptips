.. _inverted-spaceship-results:

Inverted Spaceship Results
--------------------------

.. meta::
	:description:
		Inverted Spaceship Results: In the first class, the properties are declared $a, then $b.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inverted Spaceship Results
	:twitter:description: Inverted Spaceship Results: In the first class, the properties are declared $a, then $b
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/inverted-spaceship.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/inverted-spaceship.png
	:og:title: Inverted Spaceship Results
	:og:type: article
	:og:description: In the first class, the properties are declared $a, then $b
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/inverted-spaceship.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/inverted-spaceship.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/inverted-spaceship.html","name":"Inverted Spaceship Results","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:32:05 +0000","dateModified":"Tue, 14 Jul 2026 14:32:05 +0000","description":"In the first class, the properties are declared $a, then $b","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/inverted-spaceship.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class A {
       public string $a;
       public string $b;
       public function __construct(
           string $a,
           string $b,
       ){
           $this->a = $a;
           $this->b = $b;
       }
   }
   
   $a = new A('b', 'a');
   $b = new A('a', 'b');
   
   var_dump($a <=> $b);  // 1
   var_dump($b <=> $a);  // -1
   
   class B {
       public string $b;  // The property declarations are inverted
       public string $a;
       public function __construct(
           string $a,
           string $b,
       ){
           $this->a = $a;
           $this->b = $b;
       }
   }
   
   $a = new B('b', 'a');
   $b = new B('a', 'b');
   
   var_dump($a <=> $b);  // -1
   var_dump($b <=> $a);  // 1


In the first class, the properties are declared $a, then $b. Comparing the values with spaceship leads to 1, -1.

In the first class, the properties are declared $b, then $a. The rest of the code is the same. Comparing the values with spaceship leads to -1, 1.

This phenomenon disappears when using promoted properties.

See Also
________

* `Order of properties matter <https://3v4l.org/2nPL6#veol>`_ [Try me]
* `Order of promoted properties doesn't matter' <https://3v4l.org/E6G8f#veol>`_ [Try me]


PHP Features
____________

* `promoted-property <https://php-dictionary.readthedocs.io/en/latest/dictionary/promoted-property.ini.html>`_

* `spaceship <https://php-dictionary.readthedocs.io/en/latest/dictionary/spaceship.ini.html>`_

* `declaration <https://php-dictionary.readthedocs.io/en/latest/dictionary/declaration.ini.html>`_

* `order-of-execution <https://php-dictionary.readthedocs.io/en/latest/dictionary/order-of-execution.ini.html>`_


