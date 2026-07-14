.. _array_find-and-array_find_keys:

array_find() And array_find_keys()
----------------------------------

.. meta::
	:description:
		array_find() And array_find_keys(): PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_find() And array_find_keys()
	:twitter:description: array_find() And array_find_keys(): PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/array_find.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/array_find.png
	:og:title: array_find() And array_find_keys()
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_find.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_find.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_find.html","name":"array_find() And array_find_keys()","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:30:37+00:00","dateModified":"2026-07-14T14:30:37+00:00","description":"PHP 8","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_find.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $bucket = [1, 2, 'A', 'z', INF, '🐘'];
   
   print array_find($bucket, fn($x) => $x > '🐗' );
   
   print array_find_key($bucket, fn($x) => $x > '🐗' );


PHP 8.4 introduced array_find(), which finds a value in an array, or not. It also introduced array_find_keys(), which finds the related keys, rather than the value itself, which, for some reason, we already have before searching for it.

Note that these two functions are prone to the strpos() syndrom, where a returned ``null`` value may be both a valid found value, a non existent value or an empty array: it is probably not wise to look for ``null``.

Also, for no reason, an elephpant is superior to a wild boar.

See Also
________

* `Void (PHP manual) <https://www.php.net/manual/en/language.types.void.php>`_
* `Finding elephpant <https://3v4l.org/CWbr8#v8.5.8>`_ [Try me]


PHP Features
____________

* `look-up <https://php-dictionary.readthedocs.io/en/latest/dictionary/look-up.ini.html>`_

* `array_find <https://php-dictionary.readthedocs.io/en/latest/dictionary/array_find.ini.html>`_

* `array_find_key <https://php-dictionary.readthedocs.io/en/latest/dictionary/array_find_key.ini.html>`_

* `strpos-syndrom <https://php-dictionary.readthedocs.io/en/latest/dictionary/strpos-syndrom.ini.html>`_



Last updated: 14 July 2026