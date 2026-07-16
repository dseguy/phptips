.. _strtr-does-only-one-pass:

strtr() Does Only One Pass
--------------------------

.. meta::
	:description:
		strtr() Does Only One Pass: strtr() replaces string inside a string, just like str_replace().
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strtr() Does Only One Pass
	:twitter:description: strtr() Does Only One Pass: strtr() replaces string inside a string, just like str_replace()
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/strtr.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/strtr.png
	:og:title: strtr() Does Only One Pass
	:og:type: article
	:og:description: strtr() replaces string inside a string, just like str_replace()
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/strtr.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strtr.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strtr.html","name":"strtr() Does Only One Pass","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-16T06:07:05+00:00","dateModified":"2026-07-16T06:07:05+00:00","description":"strtr() replaces string inside a string, just like str_replace()","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strtr.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $map = [
       'foo' => 'bar',
       'foobar' => 'foo',
   ];
   
   $input = 'foobar and foo';
   
   echo str_replace(array_keys($map), array_values($map), $input);
   // Output: 'bar bar and bar'
   
   echo strtr($input, $map);
   // Output: 'baz and bar' 


strtr() replaces string inside a string, just like str_replace().

The two functions work both with string and arrays of strings as argument, so it is convenient when you need to replace several distinct and non-overlapping strings.

In terms of readability, strtr() accepts a hash with ``original => replacement`` strings, while str_replace() needs them split and aligned.

Finally, strtr() only does one pass on the string, and replaces the longest available string. No need to sort the original strings by size, or end up with the replaced string used multiple times. It is actually more efficient and more predictable.

See Also
________

* `strtr versus str_replace <https://3v4l.org/a1T8q#v>`_ [Try me]


PHP Features
____________

* `strtr <https://php-dictionary.readthedocs.io/en/latest/dictionary/strtr.ini.html>`_

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_



Last updated: 16 July 2026