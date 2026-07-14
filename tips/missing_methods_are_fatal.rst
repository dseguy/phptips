.. _missing-methods-are-fatal:

Missing Methods Are Fatal
-------------------------

.. meta::
	:description:
		Missing Methods Are Fatal: Calling a missing method is a fatal error.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Missing Methods Are Fatal
	:twitter:description: Missing Methods Are Fatal: Calling a missing method is a fatal error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/missing_methods_are_fatal.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/missing_methods_are_fatal.png
	:og:title: Missing Methods Are Fatal
	:og:type: article
	:og:description: Calling a missing method is a fatal error
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/missing_methods_are_fatal.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/missing_methods_are_fatal.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/missing_methods_are_fatal.html","name":"Missing Methods Are Fatal","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:22+00:00","dateModified":"2026-07-14T14:32:22+00:00","description":"Calling a missing method is a fatal error","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/missing_methods_are_fatal.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x {
       function p() {
           return $this->p;
       }
   }
   
   $x = new x;
   var_dump($x->p);
   var_dump($x->foo());


Calling a missing method is a fatal error. Reading a missing property is a warning, and defaults to NULL. Writing to an undefined property is deprecated in PHP 8.3, and will become a fatal error in PHP 9.0. This means that both errors will have the same impact in the code.

See Also
________

* `Properties (PHP manual) <https://www.php.net/manual/en/language.oop5.properties.php>`_
* `Don't miss the method' <https://3v4l.org/Sd9sr>`_ [Try me]


PHP Features
____________

* `void <https://php-dictionary.readthedocs.io/en/latest/dictionary/void.ini.html>`_

* `property <https://php-dictionary.readthedocs.io/en/latest/dictionary/property.ini.html>`_

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_



Last updated: 14 July 2026