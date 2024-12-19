.. _by-reference,-error-or-notice?:

By Reference, Error Or Notice?
------------------------------

.. meta::
	:description:
		By Reference, Error Or Notice?: Passing a literal, by reference, to a method yields a Fatal error.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: By Reference, Error Or Notice?
	:twitter:description: By Reference, Error Or Notice?: Passing a literal, by reference, to a method yields a Fatal error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/by_reference_errors.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/by_reference_errors.png
	:og:title: By Reference, Error Or Notice?
	:og:type: article
	:og:description: Passing a literal, by reference, to a method yields a Fatal error
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/by_reference_errors.html
	:og:locale: en

Passing a literal, by reference, to a method yields a Fatal error.

Returning a literal by reference, yields a Notice.

Why is there a difference of error level between these two operations, which are very similar?

.. image:: ../images/by_reference_errors.png

* `Passing By Reference (PHP manual) <https://www.php.net/manual/en/language.references.pass.php>`_


