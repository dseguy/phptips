.. _glob()-with-hidden-files:

glob() With Hidden Files
------------------------

.. meta::
	:description:
		glob() With Hidden Files: By default, the ``glob()`` function lists only files that don't start with a dot ``.

By default, the ``glob()`` function lists only files that don't start with a dot ``.``. This means that the hidden files, on Linux, are not listed.

With the ``GLOB_BRACE``` option, it is possible to list all files, and even filter out the ever present '.' and '..'.

.. image:: ../images/glob_with_hidden_files.png

* `glob <https://www.php.net/manual/en/function.glob.php>`_


