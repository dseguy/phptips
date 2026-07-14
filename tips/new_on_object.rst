.. _new-on-object:

new On Object
-------------

.. meta::
	:description:
		new On Object: It is possible to use new on an object, to get a new object of the same class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: new On Object
	:twitter:description: new On Object: It is possible to use new on an object, to get a new object of the same class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/new_on_object.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/new_on_object.png
	:og:title: new On Object
	:og:type: article
	:og:description: It is possible to use new on an object, to get a new object of the same class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/new_on_object.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/new_on_object.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/new_on_object.html","name":"new On Object","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:53:00+00:00","dateModified":"2026-07-14T14:53:00+00:00","description":"It is possible to use new on an object, to get a new object of the same class","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/new_on_object.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class X {}
   
   $s = '\x'; new $s;       // a x object
   $x = new x(); new $x();  // another x object
   
   $s = x::class;
   $a = new $s;            // yet another one
   
   // syntax error, unexpected token "class",
   // expecting variable or "$s"
   $a = new x::class;
   
   ?>


It is possible to use new on an object, to get a new object of the same class. This might be useful with anonymous classes, which cannot be created with their name.

When using the parenthesis after the variable, the __invoke() magic method won't be called, as those parenthesis are used to call the constructor. To get that result, it must be called outside the new command or within parenthesis, as ``new ($a())``.

Under the hood, PHP collects the class name from the object to produce the new one. It is akin to using the class name in a string.

Lastly, the full class name is available in the x::class syntax, but PHP won't recognize ``new x::class``, and even emit a Fatal error: it recognizes ``new (x::class)``.

See Also
________

* `new On Object <https://3v4l.org/sgRhj>`_ [Try me]


PHP Features
____________

* `new <https://php-dictionary.readthedocs.io/en/latest/dictionary/new.ini.html>`_

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_



Last updated: 14 July 2026