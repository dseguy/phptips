.. _classes-constant-disambiguation-with-parenthesis:

Classes Constant Disambiguation With Parenthesis
------------------------------------------------

.. meta::
	:description:
		Classes Constant Disambiguation With Parenthesis: The ``::`` (scope resolution) operator and the instanceof operator in PHP are strictly designed to work with class names, not with variables or constants holding object instances.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Classes Constant Disambiguation With Parenthesis
	:twitter:description: Classes Constant Disambiguation With Parenthesis: The ``::`` (scope resolution) operator and the instanceof operator in PHP are strictly designed to work with class names, not with variables or constants holding object instances
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/class_const_confusion.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/class_const_confusion.png
	:og:title: Classes Constant Disambiguation With Parenthesis
	:og:type: article
	:og:description: The ``::`` (scope resolution) operator and the instanceof operator in PHP are strictly designed to work with class names, not with variables or constants holding object instances
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/class_const_confusion.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_const_confusion.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_const_confusion.html","name":"Classes Constant Disambiguation With Parenthesis","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:04+00:00","dateModified":"2026-07-14T14:31:04+00:00","description":"The ``::`` (scope resolution) operator and the instanceof operator in PHP are strictly designed to work with class names, not with variables or constants holding object instances","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_const_confusion.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class A { const B = 'A::B is a constant'.PHP_EOL; }
   
   class C { const B = 'C::B is a constant'.PHP_EOL; }
   
   const C = new A;
   
   echo C::B;    // C is the class
   echo (C)::B;  // C is the constant
   
   // C is a class here
   var_dump(new C instanceof C);
   // (C) is the constant, 
   var_dump(new C instanceof (C));
   
   // instanceof works with objects too
   var_dump(new C instanceof (new C));
   
   // but this is invalid syntax
   //var_dump(new C instanceof new C);
   
   ?>


The ``::`` (scope resolution) operator and the instanceof operator in PHP are strictly designed to work with class names, not with variables or constants holding object instances. Even when a constant exists with a name identical to a class, PHP will not automatically treat it as an object for these operators. The constant’s value, even if it holds an object, will not be used unless it is explicitly dereferenced. To dereference and force evaluation of the constant's value as an object, you must enclose the constant in parentheses. This ensures PHP evaluates the constant and retrieves the object it contains before applying the operator.

See Also
________

* `Classes Only <https://3v4l.org/XsH0k>`_ [Try me]


PHP Features
____________

* `constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/constant.ini.html>`_

* `scope-resolution-operator <https://php-dictionary.readthedocs.io/en/latest/dictionary/scope-resolution-operator.ini.html>`_

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `instanceof <https://php-dictionary.readthedocs.io/en/latest/dictionary/instanceof.ini.html>`_

* `parenthesis <https://php-dictionary.readthedocs.io/en/latest/dictionary/parenthesis.ini.html>`_



Last updated: 14 July 2026