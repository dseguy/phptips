.. _the-unreachable-method:

The Unreachable Method
----------------------

.. meta::
	:description:
		The Unreachable Method: How can one call the A::foo() method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The Unreachable Method
	:twitter:description: The Unreachable Method: How can one call the A::foo() method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/unreachable_method.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/unreachable_method.png
	:og:title: The Unreachable Method
	:og:type: article
	:og:description: How can one call the A::foo() method
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unreachable_method.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unreachable_method.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unreachable_method.html","name":"The Unreachable Method","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:53+00:00","dateModified":"2026-07-14T14:33:53+00:00","description":"How can one call the A::foo() method","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unreachable_method.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   abstract class A {
       private function foo() {
           print __CLASS__;
       }
   }
   
   abstract class B extends A {
       public function foo() {
           print __CLASS__;
       }
   }
   
   class C extends B {
       public function foo() {
           print __CLASS__;
       }
       
       public function goo() {
           parent::foo();
           a::foo();
       }
   }
   
   ($c = new C)->foo();
   $c->goo();


How can one call the A::foo() method? A::foo() is public, but it is also part of an abstract class. It is not possible to call it directly, as no such object may be created.

It is also the case for B, so we have to call C. Now, between A and C, there is B::foo(), which intercepts the call to A::foo(): it has priority. So C::goo() can reach B::foo() but not A::foo().

The solution is not to use parent but to directly use the name of the class, and the static operator. Even as the target method is not static, it may be called as such from within a child class, and the $this variable will be provided.

This trick works on public and protected methods, but not on private: this is the visibility talking.

See Also
________

* `The unreachable method <https://3v4l.org/pXCpG#v8.5.7>`_ [Try me]


PHP Features
____________

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `parent <https://php-dictionary.readthedocs.io/en/latest/dictionary/parent.ini.html>`_

* `class-invasion <https://php-dictionary.readthedocs.io/en/latest/dictionary/class-invasion.ini.html>`_



Last updated: 14 July 2026