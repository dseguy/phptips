.. _dynamic-class-constant:

Dynamic Class Constant
----------------------

.. meta::
	:description:
		Dynamic Class Constant: It is not allowed to create dynamically a class constant.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Class Constant
	:twitter:description: Dynamic Class Constant: It is not allowed to create dynamically a class constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/dynamic_class_constant.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/dynamic_class_constant.png
	:og:title: Dynamic Class Constant
	:og:type: article
	:og:description: It is not allowed to create dynamically a class constant
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/dynamic_class_constant.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/dynamic_class_constant.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/dynamic_class_constant.html","name":"Dynamic Class Constant","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:25+00:00","dateModified":"2026-07-14T14:31:25+00:00","description":"It is not allowed to create dynamically a class constant","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/dynamic_class_constant.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   // echo A::A;
   // Undefined constant "B"
   
   define('B', 'yes');
   
   class A {
       public const A = B;
   }
   
   echo A::A;
   // yes
   
   ?>


It is not allowed to create dynamically a class constant. The only way is to create a global constant, using the define() function.

So, when there is a need for a dynamically created constant, the trick is to assign the class constant a global constant's value, and then, create the global constant.

Of course, it is not possible to use that class constant until the global constant has been actually created.

See Also
________

* `Define() (PHP manual) <https://www.php.net/manual/en/function.define.php>`_
* `Define a dynamic class constant value <https://3v4l.org/MigJ2>`_ [Try me]


PHP Features
____________

* `constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/constant.ini.html>`_

* `dynamic <https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic.ini.html>`_

* `class-constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/class-constant.ini.html>`_



Last updated: 14 July 2026