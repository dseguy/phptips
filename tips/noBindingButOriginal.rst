.. _no-binding-but-with-original:

No Binding But With Original
----------------------------

.. meta::
	:description:
		No Binding But With Original: It is possible to change the underlying object of a closure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Binding But With Original
	:twitter:description: No Binding But With Original: It is possible to change the underlying object of a closure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/noBindingButOriginal.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/noBindingButOriginal.png
	:og:title: No Binding But With Original
	:og:type: article
	:og:description: It is possible to change the underlying object of a closure
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/noBindingButOriginal.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/noBindingButOriginal.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/noBindingButOriginal.html","name":"No Binding But With Original","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:37+00:00","dateModified":"2026-07-14T14:32:37+00:00","description":"It is possible to change the underlying object of a closure","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/noBindingButOriginal.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class A {
       public function method() {    }
   }
   
   class B extends A  {
       public function method() {    }
   }
   
   class C {
       public function method() {    }
   }
   
   class D { }
   
   $fn = Closure::fromCallable([new A, 'method']);
   $fn->call(new B); // error
   $fn->call(new C); // error
   $fn->call(new D); // error
   
   ?>


It is possible to change the underlying object of a closure. The new closure will be executed with the new object, with the same method.

On the other hand, it is not possible to call that closure on another class, even if that class has the same method, nor even if the class is a child of the original one. It must be the same original class.

See Also
________

* `The Closure class (PHP manual) <https://www.php.net/manual/en/class.closure.php>`_
* `Rebind to object <https://3v4l.org/stFK6>`_ [Try me]


PHP Error Messages
__________________

* `Cannot rebind scope of closure created from method <https://php-errors.readthedocs.io/en/latest/messages/cannot-rebind-scope-of-closure-created-from-method.html>`_



PHP Features
____________

* `closure <https://php-dictionary.readthedocs.io/en/latest/dictionary/closure.ini.html>`_

* `bind <https://php-dictionary.readthedocs.io/en/latest/dictionary/bind.ini.html>`_



Last updated: 14 July 2026