.. _constructor-needed:

Constructor Needed
------------------

.. meta::
	:description:
		Constructor Needed: By default, classes don't need a constructor, and it may be omitted.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constructor Needed
	:twitter:description: Constructor Needed: By default, classes don't need a constructor, and it may be omitted
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/constructor_needed.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/constructor_needed.png
	:og:title: Constructor Needed
	:og:type: article
	:og:description: By default, classes don't need a constructor, and it may be omitted
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/constructor_needed.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constructor_needed.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constructor_needed.html","name":"Constructor Needed","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:34:46+00:00","dateModified":"2026-07-14T14:34:46+00:00","description":"By default, classes don't need a constructor, and it may be omitted","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constructor_needed.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   
   const A = 'b::c';
   
   class B {
       static function C() { echo __METHOD__; }
   }
   
   //valid call to \B::C()
   constant('A')();
   
   // class A not found
   //new A;
   
   // Call to undefined function A()
   A();
   
   // parse error, this is not supported
   //{A}();


By default, classes don't need a constructor, and it may be omitted. It is also true in the case of child classes: PHP look for a local constructor, then a parent constructor, and it is valid to have none of them.

On the other hand, if any of the child makes an explicit call to ``parent::__construct``, then, there must be at least an explicit constructor in the family. Or, PHP generates ``Cannot call constructor`` error message.

As a rule of thumb, it might be good to always include the constructor definition, to avoid adding it later, down the road.

See Also
________

* `Constructors and Destructors (PHP manual) <https://www.php.net/manual/en/language.oop5.decon.php>`_
* `What is in an identifier <https://3v4l.org/c16hv>`_ [Try me]


PHP Error Messages
__________________

* `Cannot call constructor <https://php-errors.readthedocs.io/en/latest/messages/cannot-call-constructor.html>`_



PHP Features
____________

* `constructor <https://php-dictionary.readthedocs.io/en/latest/dictionary/constructor.ini.html>`_

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_



Last updated: 14 July 2026