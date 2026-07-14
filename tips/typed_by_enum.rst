.. _typed-by-enum:

Typed By Enum
-------------

.. meta::
	:description:
		Typed By Enum: Enumeration cannot be instantiated into an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Typed By Enum
	:twitter:description: Typed By Enum: Enumeration cannot be instantiated into an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/typed_by_enum.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/typed_by_enum.png
	:og:title: Typed By Enum
	:og:type: article
	:og:description: Enumeration cannot be instantiated into an object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/typed_by_enum.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/typed_by_enum.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/typed_by_enum.html","name":"Typed By Enum","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:47+00:00","dateModified":"2026-07-14T14:33:47+00:00","description":"Enumeration cannot be instantiated into an object","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/typed_by_enum.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   enum e {
       case A;
       
       const B = 1;
   }
   
   var_dump(e::A instanceof e);
   var_dump(e::B instanceof e);
   
   ?>


Enumeration cannot be instantiated into an object. In fact, the cases of the enumeration are the objects. Hence, a case object has the enumeration type.

Then, an enumeration (class) constant cannot be confused with a case, because the enumeration cannot be instantiated, and class constants also do not support new initializers.

See Also
________

* `Enumeration (PHP manual) <https://www.php.net/manual/en/language.types.enumerations.php>`_
* `Typing with enum <https://3v4l.org/9LZpq>`_ [Try me]


PHP Features
____________

* `enum <https://php-dictionary.readthedocs.io/en/latest/dictionary/enum.ini.html>`_

* `type <https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html>`_



Last updated: 14 July 2026