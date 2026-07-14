.. _child-of-attribute-is-not-an-attribute:

Child Of Attribute Is Not An Attribute
--------------------------------------

.. meta::
	:description:
		Child Of Attribute Is Not An Attribute: A class attribute must be marked with an attribute called ``Attribute``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Child Of Attribute Is Not An Attribute
	:twitter:description: Child Of Attribute Is Not An Attribute: A class attribute must be marked with an attribute called ``Attribute``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/no_child_with_attribute.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/no_child_with_attribute.png
	:og:title: Child Of Attribute Is Not An Attribute
	:og:type: article
	:og:description: A class attribute must be marked with an attribute called ``Attribute``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/no_child_with_attribute.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_child_with_attribute.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_child_with_attribute.html","name":"Child Of Attribute Is Not An Attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:52:55 +0000","dateModified":"Tue, 14 Jul 2026 14:52:55 +0000","description":"A class attribute must be marked with an attribute called ``Attribute``","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_child_with_attribute.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   #[Attribute]
   class x {}
   
   class y extends x {}
   
   $ref = new \ReflectionFunction(#[x, y] function () { });
   
   try {
       $ref->getAttributes()[0]->newInstance();
       $ref->getAttributes()[1]->newInstance();
   } catch (\Error $e) {
       var_dump('Error : ', $e->getMessage());
   }
   
   ?>


A class attribute must be marked with an attribute called ``Attribute``. It is compulsory to use Reflection and obtain an instance of the attribute.

That attribute is only for the class itself, and it doesn't propagate automatically to the child classes.

On the other hand, the ``Attribute`` class cannot be extended: it is not possible to create a child that may carry some of the ``Attribute`` properties.

See Also
________

* `Attributes Overview (PHP manual) <https://www.php.net/manual/en/language.attributes.overview.php>`_
* `attribute is not for children <https://3v4l.org/tDOsd>`_ [Try me]


PHP Features
____________

* `reflection <https://php-dictionary.readthedocs.io/en/latest/dictionary/reflection.ini.html>`_

* `attribute <https://php-dictionary.readthedocs.io/en/latest/dictionary/attribute.ini.html>`_

* `inheritance <https://php-dictionary.readthedocs.io/en/latest/dictionary/inheritance.ini.html>`_


