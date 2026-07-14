.. _multiple-method-in-interface:

Multiple Method In Interface
----------------------------

.. meta::
	:description:
		Multiple Method In Interface: It is possible for a class to implements two interfaces that are defining the same method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiple Method In Interface
	:twitter:description: Multiple Method In Interface: It is possible for a class to implements two interfaces that are defining the same method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/multiple_method_in_interface.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/multiple_method_in_interface.png
	:og:title: Multiple Method In Interface
	:og:type: article
	:og:description: It is possible for a class to implements two interfaces that are defining the same method
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/multiple_method_in_interface.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/multiple_method_in_interface.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/multiple_method_in_interface.html","name":"Multiple Method In Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:32:26 +0000","dateModified":"Tue, 14 Jul 2026 14:32:26 +0000","description":"It is possible for a class to implements two interfaces that are defining the same method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/multiple_method_in_interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   interface i {
   //    function foo($k, $j, $l);
       function foo();
       function hoo();
   }
   
   interface j {
       
       function goo();     
       function foo();
   }
   
   class x implements  i, j  {
       function foo() {}
       function goo() {}
       function hoo() {}
   }
   
   new x;


It is possible for a class to implements two interfaces that are defining the same method. The main condition is to have the same signature for these methods.

When the methods have different signature, with different argument counts, types or return types..., there is no conflict resolution: PHP checks the class's method signature with the interfaces in order of definition, and it will stop at the first one that fails. This means that fixing the signature for the first interface leads to an error in the second one, but fixing the signature for the second interface leads to an errors for the first one. You'll have to figure the cycle yourself to solve this.

See Also
________

* `Implementing twice the same method <https://3v4l.org/rKRb4#veol>`_ [Try me]


PHP Error Messages
__________________

* `Declaration of x::foo() must be compatible with i::foo($k, $j, $l) <https://php-errors.readthedocs.io/en/latest/messages/declaration-of-%25s-must-be-compatible-with-%25s.html>`_



PHP Features
____________

* `interface <https://php-dictionary.readthedocs.io/en/latest/dictionary/interface.ini.html>`_

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_

* `signature <https://php-dictionary.readthedocs.io/en/latest/dictionary/signature.ini.html>`_

* `compatibility <https://php-dictionary.readthedocs.io/en/latest/dictionary/compatibility.ini.html>`_


