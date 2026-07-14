.. _compact-is-recursive:

compact() Is Recursive
----------------------

.. meta::
	:description:
		compact() Is Recursive: ``compact()`` accepts an array of strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: compact() Is Recursive
	:twitter:description: compact() Is Recursive: ``compact()`` accepts an array of strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/compact_is_recursive.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/compact_is_recursive.png
	:og:title: compact() Is Recursive
	:og:type: article
	:og:description: ``compact()`` accepts an array of strings
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/compact_is_recursive.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/compact_is_recursive.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/compact_is_recursive.html","name":"compact() Is Recursive","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:13+00:00","dateModified":"2026-07-14T14:31:13+00:00","description":"``compact()`` accepts an array of strings","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/compact_is_recursive.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $a = ['b', ["c"]];
   $a = ['b', [[[["c"]]]]];
   $b = 1;
   $c = 2;
   
   $d = compact($a);
   print_r($d);
   
   ?>


``compact()`` accepts an array of strings... and arrays. It uses the available arguments recursively, yet produces an array with only one level: the deep nesting is lots at compacting type.

In fact, if the variables are indeed available at compact() time, compact flattens the array, and turns it into a simple list.

It also means that it is prone to recursive error.

See Also
________

* `compact() (PHP manual) <https://www.php.net/compact>`_
* `extract() (PHP manual) <https://www.php.net/extract>`_
* `Recursive compact() <https://3v4l.org/EEAKb>`_ [Try me]


PHP Error Messages
__________________

* `Recursion detected <https://php-errors.readthedocs.io/en/latest/messages/recursion-detected.html>`_



PHP Features
____________

* `compact <https://php-dictionary.readthedocs.io/en/latest/dictionary/compact.ini.html>`_

* `extract <https://php-dictionary.readthedocs.io/en/latest/dictionary/extract.ini.html>`_

* `recursion <https://php-dictionary.readthedocs.io/en/latest/dictionary/recursion.ini.html>`_



Last updated: 14 July 2026