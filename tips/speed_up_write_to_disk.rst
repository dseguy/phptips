.. _speed-up-csv-write-to-disk:

Speed Up CSV Write To Disk
--------------------------

.. meta::
	:description:
		Speed Up CSV Write To Disk: When writing CSV files with fputcsv() function, PHP flushes each row to the disk.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Speed Up CSV Write To Disk
	:twitter:description: Speed Up CSV Write To Disk: When writing CSV files with fputcsv() function, PHP flushes each row to the disk
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/speed_up_write_to_disk.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/speed_up_write_to_disk.png
	:og:title: Speed Up CSV Write To Disk
	:og:type: article
	:og:description: When writing CSV files with fputcsv() function, PHP flushes each row to the disk
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/speed_up_write_to_disk.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/speed_up_write_to_disk.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/speed_up_write_to_disk.html","name":"Speed Up CSV Write To Disk","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:30 +0000","dateModified":"Tue, 14 Jul 2026 14:33:30 +0000","description":"When writing CSV files with fputcsv() function, PHP flushes each row to the disk","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/speed_up_write_to_disk.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   // Speedy yet memory intensive version
   $f = fopen('php://memory', 'w+');
   foreach($data_source as $row) {
       // You may configure fputcsv as usual
       fputcsv($f, $row);
   }
   rewind($f); // Important
   $fp = fopen('final.csv', 'w+');
   fputs($fp, stream_get_contents($f));
   fclose($fp);
   fclose($f);
   
   // Slower version
   $fp = fopen('final.csv', 'w+');
   foreach($data_source as $row) {
       // You may configure fputcsv as usual
       fputcsv($fp, $row);
   }
   fclose($fp);
   ?>


When writing CSV files with fputcsv() function, PHP flushes each row to the disk. To speed up the process, it is possible to open a file in memory, with the ``php://memory`` wrapper, and write the CSV there. Then, it is possible to write down from memory down to the disk in one batch, saving a lot of disks flushes.

The same trick may be used to write any kind of files: write it quickly, in memory, and then, down to the disk in one batch.

See Also
________

* `fputcsv <https://www.php.net/manual/en/function.fputcsv.php>`_
* `fputcsv() in loops <https://exakat.readthedocs.io/en/latest/Reference/Rules/Performances/CsvInLoops.html#fputcsv-in-loops>`_
* `fputcsv in loops <https://3v4l.org/8ei2U>`_ [Try me]


PHP Features
____________

* `memory <https://php-dictionary.readthedocs.io/en/latest/dictionary/memory.ini.html>`_

* `optimisation <https://php-dictionary.readthedocs.io/en/latest/dictionary/optimisation.ini.html>`_

* `csv <https://php-dictionary.readthedocs.io/en/latest/dictionary/csv.ini.html>`_

* `file <https://php-dictionary.readthedocs.io/en/latest/dictionary/file.ini.html>`_


