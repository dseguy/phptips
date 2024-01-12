.. _finally-catches-exception:

Finally Catches Exception
-------------------------

In this code, finally is executed after the throw. Since it contains a return, the function is finalized before the throw is executed. The exception is then lost, and the scripts displays 1. This is why it is recommended to avoid return in a finally clause.

.. image:: ../images/finally_catches_exception.png

* `Finally (PHP manual) <https://www.php.net/manual/en/language.exceptions.php#language.exceptions.finally>`_


