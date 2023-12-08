.. _static-variable-outside-a-method:

Static Variable Outside A Method
--------------------------------

TIL that PHP static variables can be declared out of a function, in the namespace. 



Then, it is a simple variable with a default value. There is no way to call the global scope again (that makes no sense). In fact, including the same file simply restarts the context and the static variable again. 



May be a warning from the linter could be nice.



In PHP 8.3, duplicate 'static' variable definitions is forbidden. Not in a loop, which is a bad practice anyway. 

.. image:: ../images/static_outside_method.png

* `Using static variables (PHP manual) <https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static>`_


