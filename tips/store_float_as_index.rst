.. _store-float-as-index:

Store Float As Index
--------------------

.. meta::
	:description:
		Store Float As Index: With PHP, floats cannot be used directly as array indexes because array keys must be either integers or strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Store Float As Index
	:twitter:description: Store Float As Index: With PHP, floats cannot be used directly as array indexes because array keys must be either integers or strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/store_float_as_index.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/store_float_as_index.png
	:og:title: Store Float As Index
	:og:type: article
	:og:description: With PHP, floats cannot be used directly as array indexes because array keys must be either integers or strings
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/store_float_as_index.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/store_float_as_index.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/store_float_as_index.html","name":"Store Float As Index","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:39+00:00","dateModified":"2026-07-14T14:33:39+00:00","description":"With PHP, floats cannot be used directly as array indexes because array keys must be either integers or strings","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/store_float_as_index.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $array  = [1 => 0,
              // Implicit conversion from float 1.2 to int loses precision
              1.2 => 1,
              // as string, it fits!
              '1.1' => 2,
             ];


With PHP, floats cannot be used directly as array indexes because array keys must be either integers or strings. If you attempt to use a float as an index, PHP will automatically cast it to an integer, potentially causing unexpected behavior. However, you can explicitly cast the float to a string to preserve its precision as an index. Later, due to PHP's type juggling, you can still perform arithmetic with it seamlessly.

See Also
________

* `Storing float as keys <https://3v4l.org/dvHg8>`_ [Try me]


PHP Features
____________

* `index-array <https://php-dictionary.readthedocs.io/en/latest/dictionary/index-array.ini.html>`_

* `float <https://php-dictionary.readthedocs.io/en/latest/dictionary/float.ini.html>`_



Last updated: 14 July 2026