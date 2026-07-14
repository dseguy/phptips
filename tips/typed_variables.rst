.. _typed-variables:

Typed Variables
---------------

.. meta::
	:description:
		Typed Variables: A local variable cannot be typed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Typed Variables
	:twitter:description: Typed Variables: A local variable cannot be typed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/typed_variables.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/typed_variables.png
	:og:title: Typed Variables
	:og:type: article
	:og:description: A local variable cannot be typed
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/typed_variables.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/typed_variables.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/typed_variables.html","name":"Typed Variables","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:48+00:00","dateModified":"2026-07-14T14:33:48+00:00","description":"A local variable cannot be typed","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/typed_variables.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class X {
       public static int $int = 1;
       public string $string = 'abc';
   }
   
   
   function foo() {
       $foo = new X();
       $varString = &$foo->string;
       $varString = [];
       //Cannot assign array to reference held by property X::$string of type string 
   
   
       $varInt = &X::$int;
       $varInt = 'abc';
       //Cannot assign string to reference held by property X::$int of type int
   }
   
   foo();


A local variable cannot be typed.

I mean, it may be typed at argument or return time, but not permanently, like a property.

To create a typed variable, one may use a reference to a property. The property may be typed, and this constraint is extended to the variable, with a dedicated message.

It works on static and normal properties. And it looks a bit cumbersome to use.

See Also
________

* `Typed Variables <https://3v4l.org/H1uAS>`_ [Try me]


PHP Error Messages
__________________

* `Cannot assign %s to reference held by property %s::$%s of type %s <https://php-errors.readthedocs.io/en/latest/messages/cannot-assign-%25s-to-reference-held-by-property-%25s%3A%3A%24%25s-of-type-%25s.html>`_



PHP Features
____________

* `type <https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html>`_

* `variable <https://php-dictionary.readthedocs.io/en/latest/dictionary/variable.ini.html>`_



Last updated: 14 July 2026