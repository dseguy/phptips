.. _no-unknown-for-array_merge:

No Unknown For array_merge()
----------------------------

.. meta::
	:description:
		No Unknown For array_merge(): A PHP variadic argument collects all the unused named parameters, along with their key.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Unknown For array_merge()
	:twitter:description: No Unknown For array_merge(): A PHP variadic argument collects all the unused named parameters, along with their key
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/no_unknown_for_array_merge.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/no_unknown_for_array_merge.png
	:og:title: No Unknown For array_merge()
	:og:type: article
	:og:description: A PHP variadic argument collects all the unused named parameters, along with their key
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/no_unknown_for_array_merge.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_unknown_for_array_merge.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_unknown_for_array_merge.html","name":"No Unknown For array_merge()","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:46+00:00","dateModified":"2026-07-14T14:32:46+00:00","description":"A PHP variadic argument collects all the unused named parameters, along with their key","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no_unknown_for_array_merge.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function foo($x, ...$array) {
       print_r($x);
       print_r($array);
   }
   
   $a = ['w' => 'w', 'x' => 'x'];
   
   foo(...$a);
   
   print_r(array_merge(...$a));
   // array_merge() does not accept unknown named parameters


A PHP variadic argument collects all the unused named parameters, along with their key.  That way, it is possible to handle them with their name inside the method.

On the other hand, ``array_merge()``, and some cousins, refuse them, and emits a Fatal error. There, it is important to use array_values() to avoid named parameters.

See Also
________

* `array_merge (PHP manual) <hhttps://www.php.net/array_merge>`_
* `Functions arguments <https://www.php.net/manual/en/functions.arguments.php>`_
* `array_merge() doesn't accept unknown named parameters <https://3v4l.org/miPmk>`_ [Try me]


PHP Error Messages
__________________

* `array_merge() does not accept unknown named parameters <https://php-errors.readthedocs.io/en/latest/messages/array_merge%28%29-does-not-accept-unknown-named-parameters.html>`_



PHP Features
____________

* `ellipsis <https://php-dictionary.readthedocs.io/en/latest/dictionary/ellipsis.ini.html>`_

* `named-parameter <https://php-dictionary.readthedocs.io/en/latest/dictionary/named-parameter.ini.html>`_



Last updated: 14 July 2026