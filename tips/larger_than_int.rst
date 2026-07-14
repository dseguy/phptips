.. _larger-than-int:

Larger Than Int
---------------

.. meta::
	:description:
		Larger Than Int: printf() displays an integer as a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Larger Than Int
	:twitter:description: Larger Than Int: printf() displays an integer as a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/larger_than_int.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/larger_than_int.png
	:og:title: Larger Than Int
	:og:type: article
	:og:description: printf() displays an integer as a string
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/larger_than_int.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/larger_than_int.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/larger_than_int.html","name":"Larger Than Int","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:32:13 +0000","dateModified":"Tue, 14 Jul 2026 14:32:13 +0000","description":"printf() displays an integer as a string","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/larger_than_int.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   printf('%u', -1);
   print PHP_EOL;
   print PHP_INT_MAX;


printf() displays an integer as a string. The %u format treats the integer as an unsigned integer, while PHP only process signed integer. Here, -1 is actually 0xffffffffffffff, and the resulting string is actually twice as large as the largest PHP integer PHP_INT_MAX.

Since it is returned as a string, it looks like it is larger, but PHP converts its to float as soon as it needs to process it.

See Also
________

* `Original Toot <https://phpc.social/@ramsey/116789708212135539>`_
* `Larger then PHP_INT_MAX <https://3v4l.org/GZtNq#v8.5.7>`_ [Try me]


PHP Features
____________

* `php_int_max <https://php-dictionary.readthedocs.io/en/latest/dictionary/php_int_max.ini.html>`_

* `printf <https://php-dictionary.readthedocs.io/en/latest/dictionary/printf.ini.html>`_

* `signed-integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/signed-integer.ini.html>`_


