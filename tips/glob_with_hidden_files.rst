.. _glob()-with-hidden-files:

glob() With Hidden Files
------------------------

.. meta::
	:description:
		glob() With Hidden Files: By default, the ``glob()`` function lists only files that don't start with a dot ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: glob() With Hidden Files
	:twitter:description: glob() With Hidden Files: By default, the ``glob()`` function lists only files that don't start with a dot ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/glob_with_hidden_files.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/glob_with_hidden_files.png
	:og:title: glob() With Hidden Files
	:og:type: article
	:og:description: By default, the ``glob()`` function lists only files that don't start with a dot ``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/glob_with_hidden_files.html
	:og:locale: en

By default, the ``glob()`` function lists only files that don't start with a dot ``.``. This means that the hidden files, on Linux, are not listed.

With the ``GLOB_BRACE``` option, it is possible to list all files, and even filter out the ever present '.' and '..'.

.. image:: ../images/glob_with_hidden_files.png

* `glob <https://www.php.net/manual/en/function.glob.php>`_


