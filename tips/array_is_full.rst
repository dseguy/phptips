.. _array-is-full:

Array Is Full
-------------

.. meta::
	:description:
		Array Is Full: When using append, the next id is calculated based on the largest integer key ever used in that array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Is Full
	:twitter:description: Array Is Full: When using append, the next id is calculated based on the largest integer key ever used in that array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/array_is_full.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/array_is_full.png
	:og:title: Array Is Full
	:og:type: article
	:og:description: When using append, the next id is calculated based on the largest integer key ever used in that array
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_is_full.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_is_full.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_is_full.html","name":"Array Is Full","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:30:38 +0000","dateModified":"Tue, 14 Jul 2026 14:30:38 +0000","description":"When using append, the next id is calculated based on the largest integer key ever used in that array","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_is_full.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $array = [PHP_INT_MAX => 1];
   $array[] = 2;
   
   // Cannot add element to the array as the next element is already occupied


When using append, the next id is calculated based on the largest integer key ever used in that array. When the array has reached the biggest integer possible, a.k.a. ``PHP_INT_MAX``, then the next-array-key generator fails, and this error is displayed.

Also, it is a fatal error to fill an array beyond its capacity.

See Also
________

* `array (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_
* `PHP_INT_MAX (PHP manual) <https://www.php.net/manual/en/reserved.constants.php>`_
* `array is full <https://3v4l.org/aN7pP>`_ [Try me]


PHP Features
____________

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `index-array <https://php-dictionary.readthedocs.io/en/latest/dictionary/index-array.ini.html>`_

* `php_int_max <https://php-dictionary.readthedocs.io/en/latest/dictionary/php_int_max.ini.html>`_


