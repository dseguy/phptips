.. _all-enum-cases:

All Enum Cases
--------------

.. meta::
	:description:
		All Enum Cases: One convenient aspect of enumerations is that they come with a full list of their cases.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: All Enum Cases
	:twitter:description: All Enum Cases: One convenient aspect of enumerations is that they come with a full list of their cases
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/all_cases.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/all_cases.png
	:og:title: All Enum Cases
	:og:type: article
	:og:description: One convenient aspect of enumerations is that they come with a full list of their cases
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/all_cases.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/all_cases.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/all_cases.html","name":"All Enum Cases","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:30:30 +0000","dateModified":"Tue, 14 Jul 2026 14:30:30 +0000","description":"One convenient aspect of enumerations is that they come with a full list of their cases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/all_cases.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   enum e: string {
       case A = 1;
       case B = 2;
       case C = 3;
   }
   
   print_r(e::cases());
   print_r(array_column(e::cases(), 'value'));
   /**
   Array
   (
       [0] => 1
       [1] => 2
       [2] => 3
   )
   */
   print_r(array_column(e::cases(), 'name'));
   /**
   Array
   (
       [0] => A
       [1] => B
       [2] => C
   )
   */
   ?>


One convenient aspect of enumerations is that they come with a full list of their cases. Call the ``::cases()`` on any enumeration to get the full list of elements.

Then, convert this list into their scalar representation, if any, by calling ``array_column``, with the public property ``value``.

And it always works with the ``name`` property, to collect the names of the cases.

See Also
________

* `Enumerations (PHP manual) <https://www.php.net/manual/en/language.enumerations.php>`_
* `Value Listing (PHP manual) <https://www.php.net/manual/en/language.enumerations.listing.php>`_
* `Backed Enumerations (PHP manual) <https://www.php.net/manual/en/language.enumerations.backed.php>`_
* `All the enum cases <https://3v4l.org/JATi0>`_ [Try me]


PHP Features
____________

* `enum <https://php-dictionary.readthedocs.io/en/latest/dictionary/enum.ini.html>`_

* `enum-case <https://php-dictionary.readthedocs.io/en/latest/dictionary/enum-case.ini.html>`_

* `backed-enum <https://php-dictionary.readthedocs.io/en/latest/dictionary/backed-enum.ini.html>`_

* `array_column <https://php-dictionary.readthedocs.io/en/latest/dictionary/array_column.ini.html>`_

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_


