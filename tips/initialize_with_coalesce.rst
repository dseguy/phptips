.. _only-initialize-with-short-assignation-coalesce:

Only Initialize With Short Assignation Coalesce
-----------------------------------------------

.. meta::
	:description:
		Only Initialize With Short Assignation Coalesce: It is not possible to access a property before its initialisation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only Initialize With Short Assignation Coalesce
	:twitter:description: Only Initialize With Short Assignation Coalesce: It is not possible to access a property before its initialisation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/initialize_with_coalesce.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/initialize_with_coalesce.png
	:og:title: Only Initialize With Short Assignation Coalesce
	:og:type: article
	:og:description: It is not possible to access a property before its initialisation
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/initialize_with_coalesce.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_with_coalesce.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_with_coalesce.html","name":"Only Initialize With Short Assignation Coalesce","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:58 +0000","dateModified":"Tue, 14 Jul 2026 14:31:58 +0000","description":"It is not possible to access a property before its initialisation","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/initialize_with_coalesce.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x {
       private static self $x;
   
       static function getInstance() {
           // all good
           return self::$x ??= new self();
       }
   
       static function getInstance2() {
           // Not ok : cannot access before initialisation
           return self::$x = self::$x ?? new self();
       }
   
       static function getError() {
           // Not ok : cannot access before initialisation
           if (!self::$x instanceof self) {
               self::$x = new self();
           }
   
           return self::$x;
       }
   }


It is not possible to access a property before its initialisation. This is true to both static and normal properties.

While normal properties are initialized at constructor time, static properties might require a check before assignation : in case the property has not been yet assigned, a Fatal error will stop the code execution.

In fact, there is a way : it is the short assignation with coalesce, which will accept to check the NULL value, and only fill it if it is null.

See Also
________

* `Properties <https://www.php.net/manual/en/language.oop5.properties.php>`_
* `this function never returns <https://3v4l.org/ZmVk4>`_ [Try me]


PHP Features
____________

* `property <https://php-dictionary.readthedocs.io/en/latest/dictionary/property.ini.html>`_

* `short-assignation <https://php-dictionary.readthedocs.io/en/latest/dictionary/short-assignation.ini.html>`_

* `coalesce <https://php-dictionary.readthedocs.io/en/latest/dictionary/coalesce.ini.html>`_


