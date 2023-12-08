.. _abstract-constants:

Abstract Constants
------------------

By `WebSmithery <https://stackoverflow.com/users/2519523/websmithery>`_

There's a pretty common pattern to declare "abstract class constants" in PHP.



PHP lazy loading will prevent the error "Fatal error: Uncaught Error: Cannot declare self-referencing constant self::NAME" if the constant is overloaded. 



This makes an effective 'abstract constant', that must be defined to be usable. 



.. image:: ../images/abstract_constant.png

* `Class Constants (PHP manual) <https://www.php.net/manual/en/language.oop5.constants.php>`_
* `Class Abstraction (PHP manual) <https://www.php.net/manual/en/language.oop5.abstract.php>`_
* `Abstract constants in PHP - Force a child class to define a constant <https://stackoverflow.com/questions/10368620/abstract-constants-in-php-force-a-child-class-to-define-a-constant>`_


