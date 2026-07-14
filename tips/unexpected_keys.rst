.. _unexpected-keys-in-array:

Unexpected Keys In Array
------------------------

.. meta::
	:description:
		Unexpected Keys In Array: It is possible to put 2 elements in a PHP array, find different 5 keys with ``array_key_exists()`` or ``isset()`` and yet, still count 2 distinct elements (key wise).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unexpected Keys In Array
	:twitter:description: Unexpected Keys In Array: It is possible to put 2 elements in a PHP array, find different 5 keys with ``array_key_exists()`` or ``isset()`` and yet, still count 2 distinct elements (key wise)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/unexpected_keys.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/unexpected_keys.png
	:og:title: Unexpected Keys In Array
	:og:type: article
	:og:description: It is possible to put 2 elements in a PHP array, find different 5 keys with ``array_key_exists()`` or ``isset()`` and yet, still count 2 distinct elements (key wise)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unexpected_keys.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unexpected_keys.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unexpected_keys.html","name":"Unexpected Keys In Array","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:51+00:00","dateModified":"2026-07-14T14:33:51+00:00","description":"It is possible to put 2 elements in a PHP array, find different 5 keys with ``array_key_exists()`` or ``isset()`` and yet, still count 2 distinct elements (key wise)","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unexpected_keys.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $array = [null => 42, false => 43];
   
   var_dump(array_key_exists(null, $array));  // true
   var_dump(array_key_exists('', $array));    // true
   var_dump(array_key_exists(false, $array)); // true
   var_dump(array_key_exists(0, $array));     // true
   var_dump(array_key_exists(0.0, $array));   // true
   
   print count($array). " elements in the array
   ";


It is possible to put 2 elements in a PHP array, find different 5 keys with ``array_key_exists()`` or ``isset()`` and yet, still count 2 distinct elements (key wise).

The type-juggling for array keys is applied in every PHP features, to keep things easy to use.

This code is one rare way to show how it still leaks. Depending on the context, it might be very confusing.

See Also
________

* `More keys than count <https://3v4l.org/ITVEd>`_ [Try me]


PHP Features
____________

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `index-array <https://php-dictionary.readthedocs.io/en/latest/dictionary/index-array.ini.html>`_

* `type-juggling <https://php-dictionary.readthedocs.io/en/latest/dictionary/type-juggling.ini.html>`_

* `array_key_exists <https://php-dictionary.readthedocs.io/en/latest/dictionary/array_key_exists.ini.html>`_



Last updated: 14 July 2026