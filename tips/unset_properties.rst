.. _unsetting-properties-surprises:

Unsetting Properties Surprises
------------------------------

.. meta::
	:description:
		Unsetting Properties Surprises: Unsetting properties is always a surprise.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unsetting Properties Surprises
	:twitter:description: Unsetting Properties Surprises: Unsetting properties is always a surprise
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/unset_properties.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/unset_properties.png
	:og:title: Unsetting Properties Surprises
	:og:type: article
	:og:description: Unsetting properties is always a surprise
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unset_properties.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unset_properties.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unset_properties.html","name":"Unsetting Properties Surprises","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:54+00:00","dateModified":"2026-07-14T14:33:54+00:00","description":"Unsetting properties is always a surprise","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unset_properties.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class X {
       public $a;
       public ?int $b = 1;
       
       function clean() {
           unset($this->a);
           unset($this->b);
       }
   }
   
   $x = new X;
   $x->clean();
   
   var_dump($x->a);
   var_dump($x->b);
   
   ?>


Unsetting properties is always a surprise.

First, if the property was typed, it yields a Fatal Error, as the property cannot be accessed before initialization. And, the unset destroyed the property.

Also, checking an unset property with property_exists() is done against the class definition, not the current object state.

See Also
________

* `Double quoted <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`_
* `Unset Properties <https://3v4l.org/SU2SE>`_ [Try me]


PHP Error Messages
__________________

* `Undefined property <https://php-errors.readthedocs.io/en/latest/messages/undefined-property-%25s%3A%3A%24%25s.html>`_

* `Typed property %s::$%s must not be accessed before initialization <https://php-errors.readthedocs.io/en/latest/messages/typed-property-%25s%3A%3A%24%25s-must-not-be-accessed-before-initialization.html>`_



PHP Features
____________

* `unset <https://php-dictionary.readthedocs.io/en/latest/dictionary/unset.ini.html>`_

* `property <https://php-dictionary.readthedocs.io/en/latest/dictionary/property.ini.html>`_



Last updated: 14 July 2026