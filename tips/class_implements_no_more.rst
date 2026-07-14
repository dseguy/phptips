.. _class-implement-no-more:

Class Implement No More
-----------------------

.. meta::
	:description:
		Class Implement No More: Inheritance forces children classes to have only methods that are compatible with the parent's methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Implement No More
	:twitter:description: Class Implement No More: Inheritance forces children classes to have only methods that are compatible with the parent's methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/class_implements_no_more.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/class_implements_no_more.png
	:og:title: Class Implement No More
	:og:type: article
	:og:description: Inheritance forces children classes to have only methods that are compatible with the parent's methods
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/class_implements_no_more.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_implements_no_more.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_implements_no_more.html","name":"Class Implement No More","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:05+00:00","dateModified":"2026-07-14T14:31:05+00:00","description":"Inheritance forces children classes to have only methods that are compatible with the parent's methods","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_implements_no_more.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   try {
       $x = initSomething();
       doSomething();        // may throw an exception
   }
   
   // no catch: exception keep their way
   
   // finally is always executed
   // with or without exception being caught
   finally{
       $x->shutdown();
   }
   
   ?>


Inheritance forces children classes to have only methods that are compatible with the parent's methods.

The only exception is the constructor, which may have a totally different signature from generation to generation.

Interfaces apply the same constraints: their methods signature must be compatible with the host class. In this case, it also applies to the constructor.

So, in the case a parent class implements an interface with a constructor, and this class has a child class, the child may look compatible with the interface, and yet, be invalid at the constructor level.

Another good reason to avoid placing constructors in interfaces.

See Also
________

* `Object Interfaces (PHP manual) <https://www.php.net/manual/en/language.oop5.interfaces.php>`_
* `No need for catch with try <https://3v4l.org/Wh9Ie>`_ [Try me]


PHP Features
____________

* `catch <https://php-dictionary.readthedocs.io/en/latest/dictionary/catch.ini.html>`_

* `try-catch <https://php-dictionary.readthedocs.io/en/latest/dictionary/try-catch.ini.html>`_



Last updated: 14 July 2026