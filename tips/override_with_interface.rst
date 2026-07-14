.. _override-with-interface:

Override With Interface
-----------------------

.. meta::
	:description:
		Override With Interface: The override attribute checks that a method is actually overriding a parent definition of the same method: this implies that a class must have a parent to use the Override attribute.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Override With Interface
	:twitter:description: Override With Interface: The override attribute checks that a method is actually overriding a parent definition of the same method: this implies that a class must have a parent to use the Override attribute
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/override_with_interface.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/override_with_interface.png
	:og:title: Override With Interface
	:og:type: article
	:og:description: The override attribute checks that a method is actually overriding a parent definition of the same method: this implies that a class must have a parent to use the Override attribute
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/override_with_interface.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/override_with_interface.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/override_with_interface.html","name":"Override With Interface","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:54+00:00","dateModified":"2026-07-14T14:32:54+00:00","description":"The override attribute checks that a method is actually overriding a parent definition of the same method: this implies that a class must have a parent to use the Override attribute","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/override_with_interface.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   interface i {
       function foo();
   }
   
   class X implements i {
       #[Override]
       function foo() {}
   }
   
   var_dump(new x);


The override attribute checks that a method is actually overriding a parent definition of the same method: this implies that a class must have a parent to use the Override attribute.

There is a special case, which is a class without a parent, though implementing an interface. The Override attribute may be used on any of the interface method, though the class has no parent.

See Also
________

* `More about the Override Attribute <https://www.exakat.io/en/more-about-the-override-attribute/>`_
* `Override (PHP manual) <https://www.php.net/manual/en/class.override.php>`_
* `Override works on Interfaces <https://3v4l.org/WaZPd>`_ [Try me]


PHP Features
____________

* `interface <https://php-dictionary.readthedocs.io/en/latest/dictionary/interface.ini.html>`_

* `override <https://php-dictionary.readthedocs.io/en/latest/dictionary/override.ini.html>`_



Last updated: 14 July 2026