.. _the-undefined-keyword:

The undefined Keyword
---------------------

.. meta::
	:description:
		The undefined Keyword: This is valid PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The undefined Keyword
	:twitter:description: The undefined Keyword: This is valid PHP code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/undefined_keyword.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/undefined_keyword.png
	:og:title: The undefined Keyword
	:og:type: article
	:og:description: This is valid PHP code
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/undefined_keyword.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined_keyword.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined_keyword.html","name":"The undefined Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:49 +0000","dateModified":"Tue, 14 Jul 2026 14:33:49 +0000","description":"This is valid PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined_keyword.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Hammed Oyedele <https://x.com/devhammed>`_

.. code-block:: php

   <?php
     
    declare(strict_types = 1);
   
   if (! class_exists('undefined')) {
      class undefined {}
   }
   
   if (! defined('undefined')) {
      define('undefined',  new undefined());
   }
   
   class X {
     function foo( 
         SomeType|undefined $object = undefined,
         bool|undefined $option = undefined,
     ) {
        return match($object) {
          undefined => new DefaultBehavior(),
          default => $object->someMethod()
        };
     }
   }


This is valid PHP code.

Well, I just discovered you can use an object instance as a constant and also have a class with the same name in PHP.

Laravel have the same concept for missing values except they didn't actually create a global constant for it.

This would upset some people for sure, but proof of concepts are not a crime!

See Also
________

* `Original method <https://x.com/devhammed/status/2073922641438638126>`_
* `undefined in action <https://3v4l.org/avVQD#v8.5.7>`_ [Try me]


PHP Features
____________

* `constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/constant.ini.html>`_

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `naming <https://php-dictionary.readthedocs.io/en/latest/dictionary/naming.ini.html>`_


