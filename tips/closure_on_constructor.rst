.. _closure-on-constructor:

Closure On Constructor
----------------------

.. meta::
	:description:
		Closure On Constructor: PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Closure On Constructor
	:twitter:description: Closure On Constructor: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/closure_on_constructor.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/closure_on_constructor.png
	:og:title: Closure On Constructor
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/closure_on_constructor.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_on_constructor.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_on_constructor.html","name":"Closure On Constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:09 +0000","dateModified":"Tue, 14 Jul 2026 14:31:09 +0000","description":"PHP 8","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_on_constructor.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x {
       public $p = 3;
       
       function __construct() {
           $this->p = 4;    
       }
   }
   
   //Cannot create Closure for new expression
   //$c = new X(...);
   
   $x = new x();
   echo $x->p;
   $x->p = 5;
   echo $x->p;
   $f = $x->__construct(...);
   
   $f();
   echo $x->p;


PHP 8.1 introduced first class callable, a syntax to build a closure by using the ellipis operator ``...`` as argument. This works on all sorts of calls, methods, closure, functions.

The only call where it doesn't work is the instantiation: PHP generates an error from that syntax.

On the other hand, it is possible to create a closure on the constructor method, like any other method. And there, it just calls again the constructor, on the object that was already created.

See Also
________

* `Calling the constructor <https://3v4l.org/k57Tp#v8.5.3>`_ [Try me]


PHP Error Messages
__________________

* `Cannot create Closure for new expression <https://php-errors.readthedocs.io/en/latest/messages/cannot-create-closure-for-new-expression.html>`_



PHP Features
____________

* `constructor <https://php-dictionary.readthedocs.io/en/latest/dictionary/constructor.ini.html>`_

* `first-class-callable <https://php-dictionary.readthedocs.io/en/latest/dictionary/first-class-callable.ini.html>`_

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_


