.. _cast-is-so-strong:

Cast Is So Strong
-----------------

The code below yields a Fatal Error, at linting time. PHP identifies too early the cast operator ``(int)``, and fail to recognize the function call to ``var_dump()``. 

It is possible to create a constant called ``int``, but it is not possible to put it between parenthesis, including with spaces. PHP always confuse it with the cast operator. 

Later, ``bool``, ``float``, ``string``, ``array``, ``object`` all fail to parse for the same reasons. It is also the case for ``unset``, although this operator is not supported anymore. It is also the case for ``boolean``, and ``integer``, although PHP complains about the short name of the operator.

This issue has been with PHP since PHP 4. 

.. image:: ../images/cast_is_strong.png



