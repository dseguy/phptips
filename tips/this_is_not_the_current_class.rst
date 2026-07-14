.. _this-is-not-of-the-current-class:

$this Is Not Of The Current Class
---------------------------------

.. meta::
	:description:
		$this Is Not Of The Current Class: $this is a pseudo-variable, that represents the current object of the calling object (dixit the manual): it is often portrayed as representing an object of the current class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $this Is Not Of The Current Class
	:twitter:description: $this Is Not Of The Current Class: $this is a pseudo-variable, that represents the current object of the calling object (dixit the manual): it is often portrayed as representing an object of the current class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/this_is_not_the_current_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/this_is_not_the_current_class.png
	:og:title: $this Is Not Of The Current Class
	:og:type: article
	:og:description: $this is a pseudo-variable, that represents the current object of the calling object (dixit the manual): it is often portrayed as representing an object of the current class
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/this_is_not_the_current_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/this_is_not_the_current_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/this_is_not_the_current_class.html","name":"$this Is Not Of The Current Class","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:41+00:00","dateModified":"2026-07-14T14:33:41+00:00","description":"$this is a pseudo-variable, that represents the current object of the calling object (dixit the manual): it is often portrayed as representing an object of the current class","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/this_is_not_the_current_class.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class a {
       function foo() {
           echo __CLASS__;          // a
           print get_class($this);  // a or b
       }
   }
   
   class b extends a {}
   
   (new b)->foo();


$this is a pseudo-variable, that represents the current object of the calling object (dixit the manual): it is often portrayed as representing an object of the current class. This is commonly the case.

Yet, it is possible of this object to be an instance of another class. This happens with a child of the class, in particular when that child hasn't defined a method that is present in the parent. The fallback mechanism will use the parent class.

In the end, this is still compatible.

See Also
________

* `Class <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class>`_
* `Where is my class? <https://3v4l.org/r49jU>`_ [Try me]


PHP Features
____________

* `magic-constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/magic-constant.ini.html>`_

* `get_class <https://php-dictionary.readthedocs.io/en/latest/dictionary/get_class.ini.html>`_



Last updated: 14 July 2026