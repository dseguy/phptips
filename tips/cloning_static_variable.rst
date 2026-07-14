.. _cloning-static-variable:

Cloning Static Variable
-----------------------

.. meta::
	:description:
		Cloning Static Variable: It is not possible to clone a static variable, but it is well possible to duplicate a closure which contains a static variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cloning Static Variable
	:twitter:description: Cloning Static Variable: It is not possible to clone a static variable, but it is well possible to duplicate a closure which contains a static variable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/cloning_static_variable.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/cloning_static_variable.png
	:og:title: Cloning Static Variable
	:og:type: article
	:og:description: It is not possible to clone a static variable, but it is well possible to duplicate a closure which contains a static variable
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/cloning_static_variable.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cloning_static_variable.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cloning_static_variable.html","name":"Cloning Static Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:07 +0000","dateModified":"Tue, 14 Jul 2026 14:31:07 +0000","description":"It is not possible to clone a static variable, but it is well possible to duplicate a closure which contains a static variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cloning_static_variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   // First class callable
   function a() { static $c = 0; return $c++; }
   $c = a(...);
   
   $c = function () { static $c = 0; return $c++; };
   
   print $c();
   print $c();
   $d = clone $c;
   print $d();
   
   ?>


It is not possible to clone a static variable, but it is well possible to duplicate a closure which contains a static variable. Then, the variable is duplicated with its content at the time of cloning. So, it might be the default value, or it might be an subsequent value if the closure has already been used.

When the original closure is a first class callable, the moment of cloning does not matter.

See Also
________

* `Cloning Static variable <https://3v4l.org/UmHpO#v8.5.7>`_ [Try me]


PHP Features
____________

* `first-class-callable <https://php-dictionary.readthedocs.io/en/latest/dictionary/first-class-callable.ini.html>`_

* `closure <https://php-dictionary.readthedocs.io/en/latest/dictionary/closure.ini.html>`_

* `clone <https://php-dictionary.readthedocs.io/en/latest/dictionary/clone.ini.html>`_

* `static-variable <https://php-dictionary.readthedocs.io/en/latest/dictionary/static-variable.ini.html>`_

* `order-of-execution <https://php-dictionary.readthedocs.io/en/latest/dictionary/order-of-execution.ini.html>`_


