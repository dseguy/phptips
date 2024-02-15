.. _checking-for-names-at-different-times:

Checking For Names At Different Times
-------------------------------------

	.. meta::
		:description lang=en:
			Checking For Names At Different Times: PHP lint detects early to avoid 'redeclared functions', based on local compilation.

PHP lint detects early to avoid 'redeclared functions', based on local compilation.

php -l => Cannot redeclare mb_substr() 

It doesn't apply to CIT until execution though : 

php => Cannot declare class stdClass

 because the name is already in use

.. image:: ../images/check_for_names.png



