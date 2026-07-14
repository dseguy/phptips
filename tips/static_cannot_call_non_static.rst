.. _a-static-method-cannot-call-a-non-static-method:

A Static Method Cannot Call A Non Static Method
-----------------------------------------------

.. meta::
	:description:
		A Static Method Cannot Call A Non Static Method: It is known that a non-static method can call a static method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A Static Method Cannot Call A Non Static Method
	:twitter:description: A Static Method Cannot Call A Non Static Method: It is known that a non-static method can call a static method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/static_cannot_call_non_static.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/static_cannot_call_non_static.png
	:og:title: A Static Method Cannot Call A Non Static Method
	:og:type: article
	:og:description: It is known that a non-static method can call a static method
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/static_cannot_call_non_static.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_cannot_call_non_static.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_cannot_call_non_static.html","name":"A Static Method Cannot Call A Non Static Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:33 +0000","dateModified":"Tue, 14 Jul 2026 14:33:33 +0000","description":"It is known that a non-static method can call a static method","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_cannot_call_non_static.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class X {
       static function foo() {
           self::goo();
       }
       
       function goo() {    }
   }
   
   (new x)->foo();


It is known that a non-static method can call a static method. It is less known that a static method cannot call a non-static method, even if the static syntax is possible.

A non-static method needs a value for ``$this``, which a static call doesn't provide.

See Also
________

* `cannot call static <https://3v4l.org/C8gAO>`_ [Try me]


PHP Features
____________

* `static <https://php-dictionary.readthedocs.io/en/latest/dictionary/static.ini.html>`_

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_


