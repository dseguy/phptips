.. _foreach-skips-uninitialized-properties:

Foreach() Skips Uninitialized Properties
----------------------------------------

.. meta::
	:description:
		Foreach() Skips Uninitialized Properties: Foreach() reads naturally all public properties in an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Foreach() Skips Uninitialized Properties
	:twitter:description: Foreach() Skips Uninitialized Properties: Foreach() reads naturally all public properties in an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/foreach_skips_uninitialized.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/foreach_skips_uninitialized.png
	:og:title: Foreach() Skips Uninitialized Properties
	:og:type: article
	:og:description: Foreach() reads naturally all public properties in an object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/foreach_skips_uninitialized.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/foreach_skips_uninitialized.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/foreach_skips_uninitialized.html","name":"Foreach() Skips Uninitialized Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:46 +0000","dateModified":"Tue, 14 Jul 2026 14:31:46 +0000","description":"Foreach() reads naturally all public properties in an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/foreach_skips_uninitialized.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class z {
       public readonly int $p;
       public readonly int $q;
   
       public function __construct()
       {
           $this->p = 1;
       }
   }
   
   $x = new z;
   
   // foreach skips undefined properties, readonly or not
   foreach($x as $k => $v) {
       print $k . " " . $v . PHP_EOL;
   }
   
   echo $x->q;
   ?>


Foreach() reads naturally all public properties in an object. Protected and private are omitted, unless in the right context.

Foreach() also skips silently uninitialized properties: this prevents the generation of NULL values, but also, skips all readonly properties: any direct hit on such property would otherwise generate a Fatal error.

See Also
________

* `Foreach (PHP manual) <https://www.php.net/manual/en/control-structures.foreach.php#control-structures.foreach>`_
* `foreach skips the empty values <https://3v4l.org/cAniT>`_ [Try me]


PHP Features
____________

* `foreach <https://php-dictionary.readthedocs.io/en/latest/dictionary/foreach.ini.html>`_

* `readonly <https://php-dictionary.readthedocs.io/en/latest/dictionary/readonly.ini.html>`_

* `object <https://php-dictionary.readthedocs.io/en/latest/dictionary/object.ini.html>`_


