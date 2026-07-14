.. _datetime-object-and-years:

Datetime Object, And Years
--------------------------

.. meta::
	:description:
		Datetime Object, And Years: In this code, 2 years are given to ``Datetime``, and handed back.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Datetime Object, And Years
	:twitter:description: Datetime Object, And Years: In this code, 2 years are given to ``Datetime``, and handed back
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/datetime_and_year.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/datetime_and_year.png
	:og:title: Datetime Object, And Years
	:og:type: article
	:og:description: In this code, 2 years are given to ``Datetime``, and handed back
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/datetime_and_year.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/datetime_and_year.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/datetime_and_year.html","name":"Datetime Object, And Years","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:22+00:00","dateModified":"2026-07-14T14:31:22+00:00","description":"In this code, 2 years are given to ``Datetime``, and handed back","inLanguage":"en-US","author":{"@id":"https:\/\/bsky.app\/profile\/bouchery.fr"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/datetime_and_year.html"]}]},{"@type":"Person","@id":"https:\/\/bsky.app\/profile\/bouchery.fr","name":"Frederic Bouchery","url":"https:\/\/bsky.app\/profile\/bouchery.fr","sameAs":["https:\/\/bsky.app\/profile\/bouchery.fr"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Frederic Bouchery <https://bsky.app/profile/bouchery.fr>`_

.. code-block:: php

   <?php
   for ($y = 1900; $y < 2100; $y++) {
     if (new DateTime($y)->format('Y') != $y) {
         echo $y, ' ', (new DateTime($y))->format('c'), "
   ";
         }
   }


In this code, 2 years are given to ``Datetime``, and handed back. Yet, they return the same value: 2024.

Under the hood, PHP attempts to decode the number. Instead of recognizing a year, it recognizes an hour. And, by default, it set the rest of the date to today. Later, when the date is formatted, the year becomes 2024.

One piece of advice is to format the date to PHP's liking, or use the ``createFromFormat()`` method, which uses a provided format to decode the string.

See Also
________

* `How is this code running <https://3v4l.org/6CCFl>`_ [Try me]


PHP Features
____________

* `datetime <https://php-dictionary.readthedocs.io/en/latest/dictionary/datetime.ini.html>`_

* `intdiv <https://php-dictionary.readthedocs.io/en/latest/dictionary/intdiv.ini.html>`_

* `integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/integer.ini.html>`_



Last updated: 14 July 2026