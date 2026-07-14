.. _change-a-static-variable-outside-its-function:

Change A Static Variable Outside Its Function
---------------------------------------------

.. meta::
	:description:
		Change A Static Variable Outside Its Function: Static variables are persistent between calls to the same method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Change A Static Variable Outside Its Function
	:twitter:description: Change A Static Variable Outside Its Function: Static variables are persistent between calls to the same method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/reference_on_static.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/reference_on_static.png
	:og:title: Change A Static Variable Outside Its Function
	:og:type: article
	:og:description: Static variables are persistent between calls to the same method
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/reference_on_static.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/reference_on_static.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/reference_on_static.html","name":"Change A Static Variable Outside Its Function","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:14+00:00","dateModified":"2026-07-14T14:33:14+00:00","description":"Static variables are persistent between calls to the same method","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/reference_on_static.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function &foo() {
       static $x = [];
       print_r($x);
       
       return $x;
   }
   
   $a = foo()[] = 3;
   var_dump($a);
   foo();


Static variables are persistent between calls to the same method. They are local, unless they are returned with a reference. Then, they can be accessed in the main code, and read or even written.

This is the case here, without even storing the value: it is actually updated on the fly with the array notation on the function call.

See Also
________

* `Static variables (PHP manual) <https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static>`_
* `reference on a static variable <https://3v4l.org/DWSkK>`_ [Try me]


PHP Features
____________

* `reference <https://php-dictionary.readthedocs.io/en/latest/dictionary/reference.ini.html>`_

* `argument <https://php-dictionary.readthedocs.io/en/latest/dictionary/argument.ini.html>`_



Last updated: 14 July 2026