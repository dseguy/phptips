.. _fluent-function:

Fluent Function
---------------

.. meta::
	:description:
		Fluent Function: A fluent interface allows the chaining of method calls.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fluent Function
	:twitter:description: Fluent Function: A fluent interface allows the chaining of method calls
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/fluent_function.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/fluent_function.png
	:og:title: Fluent Function
	:og:type: article
	:og:description: A fluent interface allows the chaining of method calls
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/fluent_function.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/fluent_function.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/fluent_function.html","name":"Fluent Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:44 +0000","dateModified":"Tue, 14 Jul 2026 14:31:44 +0000","description":"A fluent interface allows the chaining of method calls","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/fluent_function.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function WTF($arg) {
       // Payload: count the number of its own calls
       global $c;
       ++$c;
       
       // payload could be anything
       // use global to extract values
       global $collection;
       if (!isset($collection)) { $collection = []; }
       $collection[] = $arg;
       
       // also possible
       // $r = __FUNCTION__;
       // return $r(...)
       
       return __FUNCTION__;
   }
   
   WTF(1)(2)(4)(8)(16);
   
   echo "WTF was called $c times
   ";
   print_r($collection);
   
   ?>


A fluent interface allows the chaining of method calls. It is a bit harder to do with functions, as there is no supporting object, but it is possible.

Returning ``__FUNCTION__`` allows the subsequent call of the same function.

Returning a closure of itself is also possible, yet a bit more cumbersome, as ``__FUNCTION__`` is not recognized as a string for a function call.

Thanks to ``Andreas Heigl`` for the inspiration.

See Also
________

* `Magic Constant (PHP manual) <https://www.php.net/manual/en/language.constants.magic.php>`_
* `First Class Callable (PHP manual) <https://www.php.net/manual/en/functions.first_class_callable_syntax.php>`_
* `Fluent Functions <https://3v4l.org/HAPDR>`_ [Try me]


PHP Features
____________

* `fluent-interface <https://php-dictionary.readthedocs.io/en/latest/dictionary/fluent-interface.ini.html>`_

* `function <https://php-dictionary.readthedocs.io/en/latest/dictionary/function.ini.html>`_


