.. _url-as-comments:

URL As Comments
---------------

	.. meta::
		:description lang=en:
			URL As Comments: The code below includes a raw URL in the code.

The code below includes a raw URL in the code. PHP understand that code as a goto label, followed by a online comment starting with //. As such, the comment is valid, but cannot be repeated, as it would make a dual goto label, and PHP would raise an error.

.. image:: ../images/URL_as_comments.png

* `Goto <https://www.php.net/manual/en/control-structures.goto.php>`_


