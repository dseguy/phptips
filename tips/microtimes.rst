.. _reading-micro-seconds:

Reading Micro-seconds
---------------------

.. meta::
	:description:
		Reading Micro-seconds: There are different ways to access micro seconds in PHP : use the ``Datetime`` format of ``u``, which works with ``Datetime``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Reading Micro-seconds
	:twitter:description: Reading Micro-seconds: There are different ways to access micro seconds in PHP : use the ``Datetime`` format of ``u``, which works with ``Datetime``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/microtimes.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/microtimes.png
	:og:title: Reading Micro-seconds
	:og:type: article
	:og:description: There are different ways to access micro seconds in PHP : use the ``Datetime`` format of ``u``, which works with ``Datetime``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/microtimes.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/microtimes.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/microtimes.html","name":"Reading Micro-seconds","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:20+00:00","dateModified":"2026-07-14T14:32:20+00:00","description":"There are different ways to access micro seconds in PHP : use the ``Datetime`` format of ``u``, which works with ``Datetime``","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/microtimes.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   echo (new Datetime())->format('u');
   print PHP_EOL;
   
   echo microtime(true);
   print PHP_EOL;
   
   echo hrtime(true);
   print PHP_EOL;
   
   echo date('u');
   print PHP_EOL;


There are different ways to access micro seconds in PHP : use the ``Datetime`` format of ``u``, which works with ``Datetime``. Or call the microtime() or hrtime() functions, with the true parameter.

But don't use date(): although it has the same ``u`` formatting letter, it never provides it.

See Also
________

* `microtime() (PHP manual) <https://www.php.net/microtime>`_
* `date() (PHP manual) <https://www.php.net/date>`_
* `Datetime (PHP manual) <https://www.php.net/manual/en/class.datetime.php>`_
* `some micro times <https://3v4l.org/JvH2H>`_ [Try me]


PHP Features
____________

* `micro-second <https://php-dictionary.readthedocs.io/en/latest/dictionary/micro-second.ini.html>`_

* `datetime <https://php-dictionary.readthedocs.io/en/latest/dictionary/datetime.ini.html>`_

* `date <https://php-dictionary.readthedocs.io/en/latest/dictionary/date.ini.html>`_

* `hrtime <https://php-dictionary.readthedocs.io/en/latest/dictionary/hrtime.ini.html>`_



Last updated: 14 July 2026