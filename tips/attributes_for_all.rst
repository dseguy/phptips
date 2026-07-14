.. _more-attribute-usage:

More Attribute Usage
--------------------

.. meta::
	:description:
		More Attribute Usage: PHP attributes are for classes, but also for enums, traits and interfaces.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: More Attribute Usage
	:twitter:description: More Attribute Usage: PHP attributes are for classes, but also for enums, traits and interfaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/attributes_for_all.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/attributes_for_all.png
	:og:title: More Attribute Usage
	:og:type: article
	:og:description: PHP attributes are for classes, but also for enums, traits and interfaces
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/attributes_for_all.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attributes_for_all.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attributes_for_all.html","name":"More Attribute Usage","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:30:46+00:00","dateModified":"2026-07-14T14:30:46+00:00","description":"PHP attributes are for classes, but also for enums, traits and interfaces","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attributes_for_all.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   #[MyAttribute]
   class x {}
   
   #[MyAttribute]
   enum e {}
   
   #[MyAttribute]
   interface i {}
   
   #[MyAttribute]
   trait t {}
   
   // ===================
   
   #[MyFunctionAttribute]
   function foo() {}
   
   $c = #[MyFunctionAttribute] function () {};
   
   $f = #[MyFunctionAttribute] fn () => 1;


PHP attributes are for classes, but also for enums, traits and interfaces. With ``::TARGET_CLASS``.

PHP attributes are for functions, and also for closures and arrow functions (but not for methods). With ``::TARGET_FUNCTION``.

Beware of the position of the attribute with closures and arrow functions, though.

See Also
________

* `Declaring Attribute Classes <https://www.php.net/manual/en/language.attributes.classes.php>`_
* `Attributes for all <https://3v4l.org/pZSn7>`_ [Try me]


PHP Features
____________

* `attribute <https://php-dictionary.readthedocs.io/en/latest/dictionary/attribute.ini.html>`_

* `userland <https://php-dictionary.readthedocs.io/en/latest/dictionary/userland.ini.html>`_

* `cite <https://php-dictionary.readthedocs.io/en/latest/dictionary/cite.ini.html>`_



Last updated: 14 July 2026