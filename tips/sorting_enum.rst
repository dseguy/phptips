.. _sorting-enum:

Sorting Enum
------------

.. meta::
	:description:
		Sorting Enum: Enum cases are sorted, by default, with their definition order.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sorting Enum
	:twitter:description: Sorting Enum: Enum cases are sorted, by default, with their definition order
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/sorting_enum.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/sorting_enum.png
	:og:title: Sorting Enum
	:og:type: article
	:og:description: Enum cases are sorted, by default, with their definition order
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/sorting_enum.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sorting_enum.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sorting_enum.html","name":"Sorting Enum","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:27+00:00","dateModified":"2026-07-14T14:33:27+00:00","description":"Enum cases are sorted, by default, with their definition order","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sorting_enum.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   enum E {
       case A;
       case B;
       
       case D;
       case E;
   }
   
   print_r(E::cases());
   
   enum E2 {
       case E;
       case D;
       case B;
       case A;
   }
   
   print_r(E2::cases());
   
   enum E3: int {
       case A = 3;
       case B = 12;
       
       case D = 1;
       case E = 20;
   }
   
   $cases = E3::cases();
   uasort($cases, fn ($a, $b) => $a->value <=> $b->value);
   print_r($cases);


Enum cases are sorted, by default, with their definition order. The name of the case does not matter, just the position of definition within the enumeration.

When the order of definition cannot be changed, as per coding convention, the cases may be backed, and then, sorted at the last moment. Just know that the cases must be in a variable first.

See Also
________

* `When your enum case order actually matters <https://masteringlaravel.io/daily/2026-04-09-when-your-enum-case-order-actually-matters>`_
* `Sorting Enums <https://3v4l.org/R1pFL>`_ [Try me]


PHP Error Messages
__________________

* `Only variables should be passed by reference <https://php-errors.readthedocs.io/en/latest/messages/only-variables-should-be-passed-by-reference.html>`_



PHP Features
____________

* `enum <https://php-dictionary.readthedocs.io/en/latest/dictionary/enum.ini.html>`_

* `case <https://php-dictionary.readthedocs.io/en/latest/dictionary/case.ini.html>`_

* `sort <https://php-dictionary.readthedocs.io/en/latest/dictionary/sort.ini.html>`_



Last updated: 14 July 2026