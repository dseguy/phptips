.. _get_class-or-class:

get_class() Or ::class?
-----------------------

.. meta::
	:description:
		get_class() Or ::class?: Both ``get_class()`` and ``::class`` do the same: they report the name of the class of the provided object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_class() Or ::class?
	:twitter:description: get_class() Or ::class?: Both ``get_class()`` and ``::class`` do the same: they report the name of the class of the provided object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/get_class_or_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/get_class_or_class.png
	:og:title: get_class() Or ::class?
	:og:type: article
	:og:description: Both ``get_class()`` and ``::class`` do the same: they report the name of the class of the provided object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/get_class_or_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_class_or_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_class_or_class.html","name":"get_class() Or ::class?","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:53:07+00:00","dateModified":"2026-07-14T14:53:07+00:00","description":"Both ``get_class()`` and ``::class`` do the same: they report the name of the class of the provided object","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_class_or_class.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   namespace abc;
   
   class def {}
   
   $x = new \ABC\DEF();
   print get_class($x);
   print PHP_EOL;
   print $x::class;
   print PHP_EOL;
   print DEF::class;
   print PHP_EOL;


Both ``get_class()`` and ``::class`` do the same: they report the name of the class of the provided object. The nuances are in the details.

``get_class()`` needs an object as argument, and emits a ``TypeError`` if not provided one. ``::class`` works both on objects and class names. The latter are, basically, strings, so ``::class`` work on strings.

``get_class()`` needs the class to be available, while ``::class`` merely formats the name of the class with the internal case: this works on an object, but not if the class name is hardcoded.

And who hardcodes its class names with strings?

See Also
________

* `get_class (PHP manual) <https://www.php.net/manual/en/function.get-class.php>`_
* `::class <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class.class>`_
* `get_class() or ::class? <https://3v4l.org/OaCZ5>`_ [Try me]


PHP Features
____________

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `class-operator <https://php-dictionary.readthedocs.io/en/latest/dictionary/class-operator.ini.html>`_

* `typeerror <https://php-dictionary.readthedocs.io/en/latest/dictionary/typeerror.ini.html>`_

* `get_class <https://php-dictionary.readthedocs.io/en/latest/dictionary/get_class.ini.html>`_



Last updated: 14 July 2026