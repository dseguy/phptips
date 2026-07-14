.. _attribute-without-class:

Attribute Without Class
-----------------------

.. meta::
	:description:
		Attribute Without Class: PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attribute Without Class
	:twitter:description: Attribute Without Class: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/attribute_without_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/attribute_without_class.png
	:og:title: Attribute Without Class
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/attribute_without_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attribute_without_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attribute_without_class.html","name":"Attribute Without Class","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:53:17+00:00","dateModified":"2026-07-14T14:53:17+00:00","description":"PHP 8","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attribute_without_class.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   #[Attribute]
   class y {
       function foo() { return __METHOD__; }
   }
   
   #[X, Y]
   function f() { }
   
   $ref = new \ReflectionFunction('\f');
   
   try {
       if ($ref->getAttributes()[0]->getName() === 'X') {
           print 'Look mom! No hands' . PHP_EOL;
       }
   
       if ($ref->getAttributes()[1]->getName() === 'Y') {
           print $ref->getAttributes()[1]->newInstance()->foo();
       }
   } catch (\Error $e) {
       # other errors
       var_dump($e->getMessage());
   }
   
   ?>


PHP 8.0 has an attribute feature, where extra options may be attached to various structures. The option is defined as a class, and is accessible via the Reflection API, and the getAttribute() method.

The attribute class is not necessary, per se. As long at the attribute is not instantiated, it is possible to rely only on the name of the attribute to handle specific behaviors.

See Also
________

* `Attributes overview (PHP manual) <https://www.php.net/manual/en/language.attributes.overview.php>`_
* `Attribute Without Class on 3v4l.org <https://3v4l.org/jc7gE>`_ [Try me]


PHP Features
____________

* `attribute <https://php-dictionary.readthedocs.io/en/latest/dictionary/attribute.ini.html>`_

* `undefined <https://php-dictionary.readthedocs.io/en/latest/dictionary/undefined.ini.html>`_



Last updated: 14 July 2026