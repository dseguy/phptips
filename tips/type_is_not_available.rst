.. _type-is-not-always-returned:

Type Is Not Always Returned
---------------------------

A method can display a return type, and never return it actually. This happens with exceptions, errors, yield and infinite loops. May be 'never' would be a better choice, if possible.

On the other hand, a function returning 'void', aka returning nothing, should not have any return statement, including the hidden one at the end of the method.

.. image:: ../images/type_is_not_available.png

* `Type Declaration (PHP manual) <https://www.php.net/manual/en/language.types.declarations.php>`_


