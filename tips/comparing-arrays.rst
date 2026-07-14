.. _comparing-arrays-and-object:

Comparing Arrays And Object
---------------------------

.. meta::
	:description:
		Comparing Arrays And Object: ``==`` and ``===`` apply different algorithms to compare arrays.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Comparing Arrays And Object
	:twitter:description: Comparing Arrays And Object: ``==`` and ``===`` apply different algorithms to compare arrays
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/comparing-arrays.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/comparing-arrays.png
	:og:title: Comparing Arrays And Object
	:og:type: article
	:og:description: ``==`` and ``===`` apply different algorithms to compare arrays
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/comparing-arrays.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/comparing-arrays.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/comparing-arrays.html","name":"Comparing Arrays And Object","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:15+00:00","dateModified":"2026-07-14T14:31:15+00:00","description":"``==`` and ``===`` apply different algorithms to compare arrays","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/comparing-arrays.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
       $a = array('green', 4 => '3', 'c' => 'yellow');
       $b = array('green', 'c' => 'yellow', '4' => 0x3);
       $c = array('green', 'c' => 'yellow', '4' => '3');
   
       var_dump($a == $b);  // true   identical, whatever the order
       var_dump($a === $b); // false  identical, but not the order
       
       var_dump($c == $b);  // true   identical, with some type juggling
       var_dump($c === $b); // false  identical, but not at the type level
       
   ?>


``==`` and ``===`` apply different algorithms to compare arrays.

``==`` compares keys without taking order in account, while ``===`` also takes into account the order.

``==`` applies type juggling to values, and then compare them loosely, while ``===`` makes a identity comparison, with value and type. ``==`` and ``===`` compare keys the same way, as they can only be ``int`` or ``string``, and no type-juggling is applied.

The same rules apply when comparing objects: the order of assignations of the properties is used by ``==`` but not by ``===``.

Finally, comparing an array and an object always fails: one of them has to be cast.

See Also
________

* `Comparing arrays <https://3v4l.org/Zqkng>`_ [Try me]
* `Comparing object <https://3v4l.org/isKLn>`_ [Try me]


PHP Features
____________

* `comparison <https://php-dictionary.readthedocs.io/en/latest/dictionary/comparison.ini.html>`_

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `property <https://php-dictionary.readthedocs.io/en/latest/dictionary/property.ini.html>`_

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_



Last updated: 14 July 2026