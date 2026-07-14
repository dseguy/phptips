.. _readonly-class-must-match-its-parent:

Readonly Class Must Match Its Parent
------------------------------------

.. meta::
	:description:
		Readonly Class Must Match Its Parent: PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readonly Class Must Match Its Parent
	:twitter:description: Readonly Class Must Match Its Parent: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/readonly-class-inheritance.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/readonly-class-inheritance.png
	:og:title: Readonly Class Must Match Its Parent
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/readonly-class-inheritance.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/readonly-class-inheritance.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/readonly-class-inheritance.html","name":"Readonly Class Must Match Its Parent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:09 +0000","dateModified":"Tue, 14 Jul 2026 14:33:09 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/readonly-class-inheritance.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   readonly class x {
       public string $p;
   }
   
   class y extends x {
       readonly public string $p;
   }


PHP 8.2's ``readonly class`` looks like sugar for marking every property readonly at once, but it comes with the same strict rule than plain readonly properties: the whole inheritance chain must agree.

This is true even if there are no properties in any class.

A non-readonly class cannot extend a readonly class, since that would let the child sneak in a mutable property.

The reverse also fails: a readonly class cannot extend a non-readonly one, since the parent might already have a mutable property.

It is not possible to mix and match: making all properties readonly does not prevent the engine to ask for the class to be also readonly because of the parent.

There is no partial opt-in: readonly-ness is a property of the whole class hierarchy, not of one class in it.

The most flexible way is to keep the class mutable, and make properties readonly piecemeal.

See Also
________

* `Readonly properties (PHP manual) <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties>`_
* `PHP 8.2 migration guide <https://www.php.net/manual/en/migration82.new-features.php>`_
* `readonly, classes and properties <https://3v4l.org/6TpEk#v8.5.7>`_ [Try me]


PHP Error Messages
__________________

* `Non-readonly class X cannot extend readonly class Y <https://php-errors.readthedocs.io/en/latest/messages/non-readonly-class-%25s-cannot-extend-readonly-class-%25s.html>`_

* `Readonly class X cannot extend non-readonly class Y <https://php-errors.readthedocs.io/en/latest/messages/readonly-class-%25s-cannot-extend-non-readonly-class-%25s.html>`_



PHP Features
____________

* `readonly <https://php-dictionary.readthedocs.io/en/latest/dictionary/readonly.ini.html>`_

* `property <https://php-dictionary.readthedocs.io/en/latest/dictionary/property.ini.html>`_

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `inheritance <https://php-dictionary.readthedocs.io/en/latest/dictionary/inheritance.ini.html>`_


