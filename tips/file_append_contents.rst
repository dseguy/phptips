.. _file_append_contents():

file_append_contents()
----------------------

.. meta::
	:description:
		file_append_contents(): file_put_contents() can append data to the end of the file, with the FILE_APPEND option.
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: file_append_contents().
	:twitter:description: file_append_contents(): file_put_contents() can append data to the end of the file, with the FILE_APPEND option.
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/file_append_contents.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/file_append_contents.png.png.
	:og:image: file_append_contents(): file_put_contents() can append data to the end of the file, with the FILE_APPEND option.

file_put_contents() can append data to the end of the file, with the FILE_APPEND option.

file_put_contents() keeps the file opened as little as possible, and the operation is atomic. It is better then overwriting the whole file; and it is often better than fopen(), which keeps the file open until the end of the execution.

.. image:: ../images/file_append_contents.png

* `file_put_contents() <https://www.php.net/manual/en/function.file-put-contents.php>`_
* `fopen() <https://www.php.net/manual/en/function.fopen.php>`_


