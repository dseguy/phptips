.. _ellipsis-with-array-parameters:

Ellipsis With Array Parameters
------------------------------

.. meta::
	:description:
		Ellipsis With Array Parameters: It is possible to spread parameters from an array, when calling a function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Ellipsis With Array Parameters
	:twitter:description: Ellipsis With Array Parameters: It is possible to spread parameters from an array, when calling a function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/ellipsis_array_parameters.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/ellipsis_array_parameters.png
	:og:title: Ellipsis With Array Parameters
	:og:type: article
	:og:description: It is possible to spread parameters from an array, when calling a function
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/ellipsis_array_parameters.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/ellipsis_array_parameters.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/ellipsis_array_parameters.html","name":"Ellipsis With Array Parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:32 +0000","dateModified":"Tue, 14 Jul 2026 14:31:32 +0000","description":"It is possible to spread parameters from an array, when calling a function","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/ellipsis_array_parameters.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function foo($a, $b) { echo "$a $b
   ";}
   
   foo(...['x', 'y']);                 // x y
   // named parameters
   foo(...['a' => 'x',  'b' => 'y']);  // x y
   foo(...['b' => 'x',  'a' => 'y']);  // y x
   
   // positional parameters: integer key not used
   foo(...[0 => 'x',  1 => 'y']);      // x y
   foo(...[120 => 'x',  11 => 'y']);   // x y
   foo(...[11 => 'y', 120 => 'x']);    // y x
   
   ?>


It is possible to spread parameters from an array, when calling a function.

With string keys, the parameters are named and assigned their corresponding parameter.

With integer positions, the parameters are used depending of their position in the array, not their actual key.

It might require a call to ksort() or array_values() to make it clear.

See Also
________

* `Function parameters and arguments (PHP manual) <https://www.php.net/manual/en/functions.arguments.php>`_
* `ellipsis with arrays <https://3v4l.org/TbFHe>`_ [Try me]


PHP Features
____________

* `parameter <https://php-dictionary.readthedocs.io/en/latest/dictionary/parameter.ini.html>`_

* `argument <https://php-dictionary.readthedocs.io/en/latest/dictionary/argument.ini.html>`_

* `array-spread <https://php-dictionary.readthedocs.io/en/latest/dictionary/array-spread.ini.html>`_


