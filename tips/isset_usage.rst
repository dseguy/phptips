.. _isset-on-uninitialized-properties:

isset() On Uninitialized Properties
-----------------------------------

.. meta::
	:description:
		isset() On Uninitialized Properties: Typed properties cannot be read until they are written once.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: isset() On Uninitialized Properties
	:twitter:description: isset() On Uninitialized Properties: Typed properties cannot be read until they are written once
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/isset_usage.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/isset_usage.png
	:og:title: isset() On Uninitialized Properties
	:og:type: article
	:og:description: Typed properties cannot be read until they are written once
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/isset_usage.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/isset_usage.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/isset_usage.html","name":"isset() On Uninitialized Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:32:12 +0000","dateModified":"Tue, 14 Jul 2026 14:32:12 +0000","description":"Typed properties cannot be read until they are written once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/isset_usage.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   //declare(strict_types=1);
   
   function foo(float $x): int {
       var_dump($x);
       
       return $x;
   }
   
   var_dump(foo(1));
   //var_dump(foo(1.1));


Typed properties cannot be read until they are written once. And many situations require to check if the property is set before writing it. Often, the type of the property is set to nullable, so it can have a default value of NULL, and then, be both checked and replaced.

isset() and the ``??`` operator are both able to check the existence of an uninitialized property without triggering the infamous fatal error. With that trick, it is possible to save a nullable type on the property, and help static analysis handling it cleanly.

See Also
________

* `isset (PHP manual) <https://www.php.net/manual/en/function.isset.php>`_
* `coalesce (PHP manual) <https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.null-coalesce-op>`_
* `No Need For Nullable On Typed Property <https://3v4l.org/F6jts#veol>`_ [Try me]


PHP Error Messages
__________________

* `Typed property X::$x must not be accessed before initialization <https://php-errors.readthedocs.io/en/latest/messages/typed-property-%25s%3A%3A%24%25s-must-not-be-accessed-before-initialization.html>`_



PHP Features
____________

* `isset <https://php-dictionary.readthedocs.io/en/latest/dictionary/isset.ini.html>`_

* `null <https://php-dictionary.readthedocs.io/en/latest/dictionary/null.ini.html>`_

* `coalesce <https://php-dictionary.readthedocs.io/en/latest/dictionary/coalesce.ini.html>`_


