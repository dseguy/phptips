.. _yield,-not-return-by-reference:

Yield, Not Return By Reference
------------------------------

.. meta::
	:description:
		Yield, Not Return By Reference: When a method returns a reference, there is a ``&`` before its name, in the signature.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Yield, Not Return By Reference
	:twitter:description: Yield, Not Return By Reference: When a method returns a reference, there is a ``&`` before its name, in the signature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/yield_not_return_by_reference.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/yield_not_return_by_reference.png
	:og:title: Yield, Not Return By Reference
	:og:type: article
	:og:description: When a method returns a reference, there is a ``&`` before its name, in the signature
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/yield_not_return_by_reference.html
	:og:locale: en

When a method returns a reference, there is a ``&`` before its name, in the signature. This means that the function must return a variable, or a property, and not a literal value.

When the same ``&`` is added on a generator, this now means that the yielded values are by reference. On the other hand, the returned value mat be a literal value, without generating a warning.

.. image:: ../images/yield_not_return_by_reference.png

* `Generator syntax <https://www.php.net/manual/en/language.generators.syntax.php>`_
* `Returning value <https://www.php.net/manual/en/functions.returning-values.php>`_
* `Yield, Not Return By Reference on 3v4l.org <https://3v4l.org/NdQsv>`_


