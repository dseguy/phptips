.. _keys-are-integers-whenever-possible:

Keys Are Integers Whenever Possible
-----------------------------------

.. meta::
	:description:
		Keys Are Integers Whenever Possible: Array keys are only strings or integers: the later has priority.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Keys Are Integers Whenever Possible
	:twitter:description: Keys Are Integers Whenever Possible: Array keys are only strings or integers: the later has priority
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/keys_are_integers.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/keys_are_integers.png
	:og:title: Keys Are Integers Whenever Possible
	:og:type: article
	:og:description: Array keys are only strings or integers: the later has priority
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/keys_are_integers.html
	:og:locale: en

Array keys are only strings or integers: the later has priority. So, when storing a string that can be converted to an integer, PHP does the conversion automatically.

In the case displayed, the keys are French zip codes, which might start with a leading ``0``. But PHP converts it into integer, and drops that leading ``0``. The value is still correctly indexed, but now, the string representation has changed.

.. image:: ../images/keys_are_integers.png

* `Array: syntax (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_


