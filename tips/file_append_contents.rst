.. _file_append_contents():

file_append_contents()
----------------------

	.. meta::
		:description lang=en:
			file_append_contents(): file_put_contents() can append data to the end of the file, with the FILE_APPEND option.

file_put_contents() can append data to the end of the file, with the FILE_APPEND option.

file_put_contents() keeps the file opened as little as possible, and the operation is atomic. It is better then overwriting the whole file; and it is often better than fopen(), which keeps the file open until the end of the execution.

.. image:: ../images/file_append_contents.png

* `file_put_contents() <https://www.php.net/manual/en/function.file-put-contents.php>`_
* `fopen() <https://www.php.net/manual/en/function.fopen.php>`_


