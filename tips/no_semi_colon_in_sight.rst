.. _no-semicolon-in-sight:

No Semicolon In Sight
---------------------

	.. meta::
		:description lang=en:
			No Semicolon In Sight: This PHP code doesn't compile: the echo must be complete to be closed with a PHP tag.

By `Ryan Chandler <https://twitter.com/ryangjchandler>`_

This PHP code doesn't compile: the echo must be complete to be closed with a PHP tag. Either the comma should be a semicolon, or an extra argument should be present.

In any case, the linting error message reports an unexpected semicolon, which is not visible in the code. Indeed, it is hidden in the PHP closing tag. 

.. image:: ../images/no_semi_colon_in_sight.png

* `PHP tags <https://www.php.net/manual/en/language.basic-syntax.phptags.php>`_


