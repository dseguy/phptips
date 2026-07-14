.. _abstract-constants:

Abstract Constants
------------------

.. meta::
	:description:
		Abstract Constants: There's a pretty common pattern to declare "abstract class constants" in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Abstract Constants
	:twitter:description: Abstract Constants: There's a pretty common pattern to declare "abstract class constants" in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/abstract_constant.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/abstract_constant.png
	:og:title: Abstract Constants
	:og:type: article
	:og:description: There's a pretty common pattern to declare "abstract class constants" in PHP
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/abstract_constant.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/abstract_constant.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/abstract_constant.html","name":"Abstract Constants","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T13:01:28+00:00","dateModified":"2026-07-14T13:01:28+00:00","description":"There's a pretty common pattern to declare \"abstract class constants\" in PHP","inLanguage":"en-US","author":{"@id":"https:\/\/stackoverflow.com\/users\/2519523\/websmithery"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/abstract_constant.html"]}]},{"@type":"Person","@id":"https:\/\/stackoverflow.com\/users\/2519523\/websmithery","name":"WebSmithery","url":"https:\/\/stackoverflow.com\/users\/2519523\/websmithery","sameAs":["https:\/\/stackoverflow.com\/users\/2519523\/websmithery"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `WebSmithery <https://stackoverflow.com/users/2519523/websmithery>`_

.. code-block:: php

   <?php
   
   abstract class Foo {
       
       // self-referential 'abstract' declaration
       const NAME = self::NAME;
   }
   
   class Fooling extends Foo {
       
       // Overrides definition from parent class
       // Without this declaration, an error will be triggered
       const NAME = 'Donald';
   }


There's a pretty common pattern to declare "abstract class constants" in PHP.

PHP lazy loading will prevent the error "Fatal error: Uncaught Error: Cannot declare self-referencing constant self::NAME" if the constant is overloaded.

This makes an effective 'abstract constant', that must be defined to be usable.

See Also
________

* `Class Constants (PHP manual) <https://www.php.net/manual/en/language.oop5.constants.php>`_
* `Class Abstraction (PHP manual) <https://www.php.net/manual/en/language.oop5.abstract.php>`_
* `Abstract constants in PHP - Force a child class to define a constant <https://stackoverflow.com/questions/10368620/abstract-constants-in-php-force-a-child-class-to-define-a-constant>`_
* `Abstract Class Constant on 3v4l.org <https://3v4l.org/uu0lU>`_ [Try me]


PHP Features
____________

* `abstract <https://php-dictionary.readthedocs.io/en/latest/dictionary/abstract.ini.html>`_

* `class-constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/class-constant.ini.html>`_

* `self <https://php-dictionary.readthedocs.io/en/latest/dictionary/self.ini.html>`_

* `inheritance <https://php-dictionary.readthedocs.io/en/latest/dictionary/inheritance.ini.html>`_

* `lazy-loading <https://php-dictionary.readthedocs.io/en/latest/dictionary/lazy-loading.ini.html>`_



Last updated: 14 July 2026