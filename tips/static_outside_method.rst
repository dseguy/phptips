.. _static-variable-outside-a-method:

Static Variable Outside A Method
--------------------------------

.. meta::
	:description:
		Static Variable Outside A Method: TIL that PHP static variables can be declared out of a function, in the namespace.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Variable Outside A Method
	:twitter:description: Static Variable Outside A Method: TIL that PHP static variables can be declared out of a function, in the namespace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/static_outside_method.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/static_outside_method.png
	:og:title: Static Variable Outside A Method
	:og:type: article
	:og:description: TIL that PHP static variables can be declared out of a function, in the namespace
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/static_outside_method.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_outside_method.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_outside_method.html","name":"Static Variable Outside A Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:35 +0000","dateModified":"Tue, 14 Jul 2026 14:33:35 +0000","description":"TIL that PHP static variables can be declared out of a function, in the namespace","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_outside_method.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   
   namespace x {
       foreach([1,2] as $i) {
           static $s = 0;
           
           print $s + $i;
           ++$s;
       }
       
   }
   
   // 13
   
   ?>


TIL that PHP static variables can be declared out of a function, in the namespace.

Then, it is a simple variable with a default value. There is no way to call the global scope again (that makes no sense). In fact, including the same file simply restarts the context and the static variable again.

May be a warning from the linter could be nice.

In PHP 8.3, duplicate 'static' variable definitions is forbidden. Not in a loop, which is a bad practice anyway.

See Also
________

* `Using static variables (PHP manual) <https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static>`_
* `Static Variable Outside A Method <https://3v4l.org/2jjV7>`_ [Try me]


PHP Features
____________

* `static-variable <https://php-dictionary.readthedocs.io/en/latest/dictionary/static-variable.ini.html>`_

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_

* `scope <https://php-dictionary.readthedocs.io/en/latest/dictionary/scope.ini.html>`_


