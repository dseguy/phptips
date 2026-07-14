.. _enumerations-cases-comparisons:

Enumeration's Cases Comparisons
-------------------------------

.. meta::
	:description:
		Enumeration's Cases Comparisons: Enumeration cases are different when the enumeration are different, not when the value of the case is different.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enumeration's Cases Comparisons
	:twitter:description: Enumeration's Cases Comparisons: Enumeration cases are different when the enumeration are different, not when the value of the case is different
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/enum_case_comparisons.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/enum_case_comparisons.png
	:og:title: Enumeration's Cases Comparisons
	:og:type: article
	:og:description: Enumeration cases are different when the enumeration are different, not when the value of the case is different
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/enum_case_comparisons.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum_case_comparisons.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum_case_comparisons.html","name":"Enumeration's Cases Comparisons","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:34+00:00","dateModified":"2026-07-14T14:31:34+00:00","description":"Enumeration cases are different when the enumeration are different, not when the value of the case is different","inLanguage":"en-US","author":{"@id":"https:\/\/bsky.app\/profile\/bouchery.fr"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum_case_comparisons.html"]}]},{"@type":"Person","@id":"https:\/\/bsky.app\/profile\/bouchery.fr","name":"Frederic Bouchery","url":"https:\/\/bsky.app\/profile\/bouchery.fr","sameAs":["https:\/\/bsky.app\/profile\/bouchery.fr"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Frederic Bouchery <https://bsky.app/profile/bouchery.fr>`_

.. code-block:: php

   <?php
   
   enum A: string
   {
       case Foo = 'bar';
   }
   
   enum B: string
   {
       case Foo = 'bar';
   }
   
   echo A::Foo === B::Foo ? 'Yes' : 'No';


Enumeration cases are different when the enumeration are different, not when the value of the case is different. It is a difference with using constants for enumerations.

To compare their value, the comparison must be done with the 'value' property, not the object.

See Also
________

* `Backed enumeration (PHP manual) <https://www.php.net/manual/en/language.enumerations.backed.php>`_
* `Enum Case Comparison <https://3v4l.org/ecLEp>`_ [Try me]


PHP Features
____________

* `enum <https://php-dictionary.readthedocs.io/en/latest/dictionary/enum.ini.html>`_

* `comparison <https://php-dictionary.readthedocs.io/en/latest/dictionary/comparison.ini.html>`_



Last updated: 14 July 2026