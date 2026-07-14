.. _internal-static-call:

Internal Static Call
--------------------

.. meta::
	:description:
		Internal Static Call: Trap of the day: one of the calls in bar() generates a 'Non-static method a::foo() cannot be called statically' error.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Internal Static Call
	:twitter:description: Internal Static Call: Trap of the day: one of the calls in bar() generates a 'Non-static method a::foo() cannot be called statically' error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/internal_static_call.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/internal_static_call.png
	:og:title: Internal Static Call
	:og:type: article
	:og:description: Trap of the day: one of the calls in bar() generates a 'Non-static method a::foo() cannot be called statically' error
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/internal_static_call.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/internal_static_call.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/internal_static_call.html","name":"Internal Static Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:32:04 +0000","dateModified":"Tue, 14 Jul 2026 14:32:04 +0000","description":"Trap of the day: one of the calls in bar() generates a 'Non-static method a::foo() cannot be called statically' error","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/internal_static_call.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class a {
       function foo() {
           echo __METHOD__ . PHP_EOL;
       }
   }
   
   class b extends a {}
   class c extends b {
       function bar() {
           $this::foo();
           $this->foo();
           a::foo();
           b::foo();
           c::foo();
           d::foo();
           static::foo();
           self::foo();
           parent::foo();
       }
   }
   
   class d extends c {}
   
   (new c)->bar();


Trap of the day: one of the calls in bar() generates a 'Non-static method a::foo() cannot be called statically' error.

Which one? It is the d::foo(). All other calls are made within the C class : internal calls may use static or normal syntax, while external calls must use the correct call syntax. This allows calls like 'parent::__construct()'.

When the call to bar() is made with '(new d)', the 'd::foo()' works again.

See Also
________

* `Late Static Bindings (PHP manual) <https://www.php.net/manual/en/language.oop5.late-static-bindings.php>`_
* `Internal Static Call <https://3v4l.org/j04vj>`_ [Try me]


PHP Error Messages
__________________

* `Non-static method a::foo() cannot be called statically <https://php-errors.readthedocs.io/en/latest/messages/non-static-method-%25s%3A%3A%25s%28%29-cannot-be-called-statically.html>`_



PHP Features
____________

* `static <https://php-dictionary.readthedocs.io/en/latest/dictionary/static.ini.html>`_

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_


