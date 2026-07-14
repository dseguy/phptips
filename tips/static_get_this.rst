.. _get-this-in-a-static:

Get $this In A Static
---------------------

.. meta::
	:description:
		Get $this In A Static: A static method does not have access to the current object, by definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Get $this In A Static
	:twitter:description: Get $this In A Static: A static method does not have access to the current object, by definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/static_get_this.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/static_get_this.png
	:og:title: Get $this In A Static
	:og:type: article
	:og:description: A static method does not have access to the current object, by definition
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/static_get_this.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_get_this.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_get_this.html","name":"Get $this In A Static","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:34+00:00","dateModified":"2026-07-14T14:33:34+00:00","description":"A static method does not have access to the current object, by definition","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_get_this.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class X {
       function foo() {
           print_r($this);
       }
       
       function bar() {
           self::foo();
       }
       
   }
   ?>


A static method does not have access to the current object, by definition.

It is also possible to call statically any method within a class.

But when a static method calls a non-static method, an error is produced:  Non-static ``method x::foo()`` cannot be called statically.

Finally, calling statically a non-static method still defines ``$this`` in the target method. Static is the nature of the method, not the call.

See Also
________

* `internal static and external static <https://3v4l.org/hLtMb>`_ [Try me]


PHP Error Messages
__________________

* `Non-static method %s::%s() cannot be called statically <https://php-errors.readthedocs.io/en/latest/messages/non-static-method-%25s%3A%3A%25s%28%29-cannot-be-called-statically.html>`_



PHP Features
____________

* `static <https://php-dictionary.readthedocs.io/en/latest/dictionary/static.ini.html>`_

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_

* `static-call <https://php-dictionary.readthedocs.io/en/latest/dictionary/static-call.ini.html>`_



Last updated: 14 July 2026