.. _remove-last-item-in-an-array:

Remove Last Item In An Array
----------------------------

.. meta::
	:description:
		Remove Last Item In An Array: Three ways to remove the last item in an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Remove Last Item In An Array
	:twitter:description: Remove Last Item In An Array: Three ways to remove the last item in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/remove_last_item.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/remove_last_item.png
	:og:title: Remove Last Item In An Array
	:og:type: article
	:og:description: Three ways to remove the last item in an array
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/remove_last_item.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/remove_last_item.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/remove_last_item.html","name":"Remove Last Item In An Array","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:16+00:00","dateModified":"2026-07-14T14:33:16+00:00","description":"Three ways to remove the last item in an array","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/remove_last_item.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $array = range(0, 100);
   
   array_pop($array);
   
   unset($array[array_key_last($array)]);
   
   $array = array_slice($array, 0, -1, preserve_keys: true);
     
   ?>


Three ways to remove the last item in an array.

array_pop() is the most adapted function, as it does actually that.

unset() is dedicated to removing elements, though it requires the calculation of the last key before. It is still the fastest of all three.

array_slice() works with the negative offset, just like a string. It is not too much slower, until one realize its result needs to be reassigned.

All in all, they need a good million iterations to see actual performances differences. It is a micro-optimisation.

See Also
________

* `array_slice() (PHP manual) <https://www.php.net/manual/en/function.array-slice.php>`_
* `unset() (PHP manual) <https://www.php.net/manual/en/function.unset.php>`_
* `array_pop() (PHP manual) <https://www.php.net/manual/en/function.array-pop.php>`_
* `comparisons <https://3v4l.org/bEaBT>`_ [Try me]


PHP Features
____________

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `array_pop <https://php-dictionary.readthedocs.io/en/latest/dictionary/array_pop.ini.html>`_

* `array_push <https://php-dictionary.readthedocs.io/en/latest/dictionary/array_push.ini.html>`_

* `unset <https://php-dictionary.readthedocs.io/en/latest/dictionary/unset.ini.html>`_

* `array_slice <https://php-dictionary.readthedocs.io/en/latest/dictionary/array_slice.ini.html>`_



Last updated: 14 July 2026