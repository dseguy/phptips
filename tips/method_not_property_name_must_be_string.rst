.. _method-not-property-name-must-be-string:

Method Not Property Name Must Be String
---------------------------------------

.. meta::
	:description:
		Method Not Property Name Must Be String: A dynamic property name must be a string, and it must exist.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method Not Property Name Must Be String
	:twitter:description: Method Not Property Name Must Be String: A dynamic property name must be a string, and it must exist
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/method_not_property_name_must_be_string.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/method_not_property_name_must_be_string.png
	:og:title: Method Not Property Name Must Be String
	:og:type: article
	:og:description: A dynamic property name must be a string, and it must exist
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/method_not_property_name_must_be_string.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method_not_property_name_must_be_string.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method_not_property_name_must_be_string.html","name":"Method Not Property Name Must Be String","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:19+00:00","dateModified":"2026-07-14T14:32:19+00:00","description":"A dynamic property name must be a string, and it must exist","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method_not_property_name_must_be_string.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class X {
       static public $p = 1;
       static function foo() {}
   
   
       function __toString() :  string {
           return 'foo';
       }    
   }
   
   $name = []; // try with different type : bool, int, float, object..
   try {
       echo X::$name;
   } catch (Error $e) {
       print $e->getMessage();
   }
   
   $name = [];
   try {
       echo X::${$name}();
   } catch (Error $e) {
       print $e->getMessage();
   }
   
   ?>


A dynamic property name must be a string, and it must exist. It cannot be anything else, as not casting to string happens.

On the other hand, a dynamic property name is forcefully cast to a string before accessing its value.

See Also
________

* `Method Not Property Name Must Be String <https://3v4l.org/aKlmO>`_ [Try me]


PHP Features
____________

* `dynamic <https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic.ini.html>`_

* `dynamic-call <https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-call.ini.html>`_

* `dynamic-property <https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-property.ini.html>`_



Last updated: 14 July 2026