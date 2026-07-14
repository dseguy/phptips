.. _lots-of-silly-arguments:

Lots Of Silly Arguments
-----------------------

.. meta::
	:description:
		Lots Of Silly Arguments: PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lots Of Silly Arguments
	:twitter:description: Lots Of Silly Arguments: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/self_invoking.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/self_invoking.png
	:og:title: Lots Of Silly Arguments
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/self_invoking.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/self_invoking.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/self_invoking.html","name":"Lots Of Silly Arguments","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:24+00:00","dateModified":"2026-07-14T14:33:24+00:00","description":"PHP 8","inLanguage":"en-US","author":{"@id":"https:\/\/twitter.com\/_Codito_"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/self_invoking.html"]}]},{"@type":"Person","@id":"https:\/\/twitter.com\/_Codito_","name":"Greg Korba","url":"https:\/\/twitter.com\/_Codito_","sameAs":["https:\/\/twitter.com\/_Codito_"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Greg Korba <https://twitter.com/_Codito_>`_

.. code-block:: php

   <?php
   
   class Foo {
       public function __invoke(): self {
           return new self();
       }
       
       public function bar(): self {
           return $this();
       }
   }
   
   var_dump(new Foo()()()()->bar()()()()());


PHP 8.4 drops the requirement of parenthesis around the new operator: it is possible to directly call a method on it.

Then, it is also possible to use an object as a method, by creating the __invoke() magic method. In this case, it returns a new instance of the class.

Finally, it is possible to call a function whose name is the result of a previous call.

The final result is quite impressive.

See Also
________

* `__invoke() (PHP manual) <https://www.php.net/manual/en/language.oop5.magic.php#object.invoke>`_
* `Lots of Silly Arguments <https://3v4l.org/Xbv66>`_ [Try me]


PHP Features
____________

* `invoke <https://php-dictionary.readthedocs.io/en/latest/dictionary/invoke.ini.html>`_

* `new <https://php-dictionary.readthedocs.io/en/latest/dictionary/new.ini.html>`_



Last updated: 14 July 2026