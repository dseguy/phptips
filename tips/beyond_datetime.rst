.. _datetime-and-leap-second:

Datetime And Leap Second
------------------------

.. meta::
	:description:
		Datetime And Leap Second: The last leap second was added on 2016, Dec 31rst.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Datetime And Leap Second
	:twitter:description: Datetime And Leap Second: The last leap second was added on 2016, Dec 31rst
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/beyond_datetime.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/beyond_datetime.png
	:og:title: Datetime And Leap Second
	:og:type: article
	:og:description: The last leap second was added on 2016, Dec 31rst
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/beyond_datetime.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/beyond_datetime.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/beyond_datetime.html","name":"Datetime And Leap Second","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:30:49 +0000","dateModified":"Tue, 14 Jul 2026 14:30:49 +0000","description":"The last leap second was added on 2016, Dec 31rst","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/beyond_datetime.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   // Leap second on 2016-12-31
   $date = DateTimeImmutable::createFromFormat(
       'j-M-Y H:i:s', '31-Dec-2016 23:59:60'
       );
   echo $date->format('Y-m-d H:i:s');
   // 2017-01-01 00:00:00 
   
       
   $date = DateTimeImmutable::createFromFormat(
       'j-M-Y H:i:s', '99-Dec-2016 99:99:99'
   );
   echo $date->format('Y-m-d H:i:s');
   // 2017-03-13 04:40:39
   
   $date = DateTimeImmutable::createFromFormat(
       'j-M-Y H:i:s', '99-Dec-2016 99:99:100'
   );
   var_dump($date); // false


The last leap second was added on 2016, Dec 31rst. On that day, 23:59:60 existed, and was followed by 00:00:00 on the first of January. The date time do not handle this, rand rather convert the ``60`` seconds into the next day, silently.

In fact, hours, minuts, seconds and day of the month, all support 2 digits, and accept values up to 99: they are all converted silently to their equivalent date, as if time of that duration passed.

Leap years, on the other hand, are all well supported.

See Also
________

* `Leap Second <https://en.wikipedia.org/wiki/Leap_second>`_
* `99s after midnight <https://3v4l.org/pXq0Q#veol>`_ [Try me]


PHP Features
____________

* `silent <https://php-dictionary.readthedocs.io/en/latest/dictionary/silent.ini.html>`_

* `datetime <https://php-dictionary.readthedocs.io/en/latest/dictionary/datetime.ini.html>`_

* `edge-case <https://php-dictionary.readthedocs.io/en/latest/dictionary/edge-case.ini.html>`_


