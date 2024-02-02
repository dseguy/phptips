.. _refactoring-strpos():

Refactoring strpos()
--------------------

It is straightforward to convert an expression strpos() === 0 to using the str_start_with() function. On the other hand, it is not the same to replace those functions when the comparison is a difference, not an equality.

.. image:: ../images/refactor_str_pos.png

* `strpos() <https://www.php.net/manual/strpos>`_


