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
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/glob_with_hidden_files.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/glob_with_hidden_files.png
	:og:title: glob() With Hidden Files
	:og:type: article
	:og:description: By default, the ``glob()`` function lists only files that don't start with a dot ``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/glob_with_hidden_files.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/glob_with_hidden_files.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/glob_with_hidden_files.html","name":"glob() With Hidden Files","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 24 Jun 2025 19:46:33 +0000","dateModified":"Tue, 24 Jun 2025 19:46:33 +0000","description":"By default, the ``glob()`` function lists only files that don't start with a dot ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/glob_with_hidden_files.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By default, the ``glob()`` function lists only files that don't start with a dot ``.``. This means that the hidden files, on Linux, are not listed.

With the ``GLOB_BRACE``` option, it is possible to list all files, and even filter out the ever present '.' and '..'.

.. image:: ../images/glob_with_hidden_files.png

See Also
________

* `glob <https://www.php.net/manual/en/function.glob.php>`_
* `Removed unwanted files <https://3v4l.org/SFD97>`_ [Try me]

