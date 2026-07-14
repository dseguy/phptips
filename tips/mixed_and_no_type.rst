.. _mixed-and-untyped-are-not-compatible-types:

Mixed And Untyped Are Not Compatible Types
------------------------------------------

.. meta::
	:description:
		Mixed And Untyped Are Not Compatible Types: A property typed mixed cannot be redefined later as untyped.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Mixed And Untyped Are Not Compatible Types
	:twitter:description: Mixed And Untyped Are Not Compatible Types: A property typed mixed cannot be redefined later as untyped
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/mixed_and_no_type.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/mixed_and_no_type.png
	:og:title: Mixed And Untyped Are Not Compatible Types
	:og:type: article
	:og:description: A property typed mixed cannot be redefined later as untyped
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/mixed_and_no_type.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/mixed_and_no_type.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/mixed_and_no_type.html","name":"Mixed And Untyped Are Not Compatible Types","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:23+00:00","dateModified":"2026-07-14T14:32:23+00:00","description":"A property typed mixed cannot be redefined later as untyped","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/mixed_and_no_type.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x {
       protected $p;
       protected mixed $p2;
   }
   
   class x2 extends x {
       protected mixed $p;
       // type of x2:$p must not be defined (as in class x)
       
       protected $p2;
       // Type of $x2:$p2 must be mixed
   }


A property typed mixed cannot be redefined later as untyped.

A property untyped cannot be redefined later as mixed.

Although, both syntax represent the same reality: any type goes.

Same for return type, in method compatibility situations. Although, it happens only when the parent is mixed, and the child untyped.

With return type, PHP does check if anything is returned with a type of ``mixed``, and not if it is untyped.

See Also
________

* `Mixed (PHP manual) <https://www.php.net/manual/en/language.types.mixed.php>`_
* `mixed or not mixed <https://3v4l.org/biaDm>`_ [Try me]


PHP Features
____________

* `mixed <https://php-dictionary.readthedocs.io/en/latest/dictionary/mixed.ini.html>`_

* `type <https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html>`_

* `inheritance <https://php-dictionary.readthedocs.io/en/latest/dictionary/inheritance.ini.html>`_



Last updated: 14 July 2026