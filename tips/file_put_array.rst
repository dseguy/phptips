.. _file_put_contents-with-array-argument:

file_put_contents() With Array Argument
---------------------------------------

.. meta::
	:description:
		file_put_contents() With Array Argument: The second argument of file_put_contents() is typed as ``mixed``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: file_put_contents() With Array Argument
	:twitter:description: file_put_contents() With Array Argument: The second argument of file_put_contents() is typed as ``mixed``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/file_put_array.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/file_put_array.png
	:og:title: file_put_contents() With Array Argument
	:og:type: article
	:og:description: The second argument of file_put_contents() is typed as ``mixed``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/file_put_array.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/file_put_array.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/file_put_array.html","name":"file_put_contents() With Array Argument","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:43+00:00","dateModified":"2026-07-14T14:31:43+00:00","description":"The second argument of file_put_contents() is typed as ``mixed``","inLanguage":"en-US","author":{"@id":"https:\/\/github.com\/Girgias"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/file_put_array.html"]}]},{"@type":"Person","@id":"https:\/\/github.com\/Girgias","name":"Gina Peter Banyard","url":"https:\/\/github.com\/Girgias","sameAs":["https:\/\/github.com\/Girgias"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Gina Peter Banyard <https://github.com/Girgias>`_

.. code-block:: php

   <?php
   
   file_put_contents('/path/to/file.txt', [1,2,3]);
   
   print file_get_contents('/path/to/file.txt');
   // print 123


The second argument of file_put_contents() is typed as ``mixed``. It may be a string, which is the most common case. It may be a stream, (aka, a resource), which pours a file into a file.

It also may be an array. PHP simply writes the elements of the array in the file, like an ``implode('', $array)``.

See Also
________

* `file_put_contents (PHP manual) <https://www.php.net/manual/en/function.file-put-contents.php>`_
* `implode, no space <https://3v4l.org/sBflr>`_ [Try me]


PHP Features
____________

* `implode <https://php-dictionary.readthedocs.io/en/latest/dictionary/implode.ini.html>`_

* `file_put_contents <https://php-dictionary.readthedocs.io/en/latest/dictionary/file_put_contents.ini.html>`_



Last updated: 14 July 2026