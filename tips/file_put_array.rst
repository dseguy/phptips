.. _file_put_contents()-with-array-argument:

file_put_contents() With Array Argument
---------------------------------------

.. meta::
	:description:
		file_put_contents() With Array Argument: The second argument of file_put_contents() is typed as ``mixed``.

By `Gina Peter Banyard <https://github.com/Girgias>`_

The second argument of file_put_contents() is typed as ``mixed``. It may be a string, which is the most common case. It may be a stream, (aka, a resource), which pours a file into a file.

It also may be an array. PHP simply writes the elements of the array in the file, like an ``implode('', $array)``.

.. image:: ../images/file_put_array.png

* `file_put_contents (PHP manual) <https://www.php.net/manual/en/function.file-put-contents.php>`_


