.. _negative-squares:

Negative Squares
----------------

.. meta::
	:description:
		Negative Squares: Still my favorite PHP bug : literal negative value is squared, and is .
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: Negative Squares.
	:twitter:description: Negative Squares: Still my favorite PHP bug : literal negative value is squared, and is .
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/squared_negative.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/squared_negative.png.png.
	:og:image: Negative Squares: Still my favorite PHP bug : literal negative value is squared, and is .

Still my favorite PHP bug : literal negative value is squared, and is ... negative. In fact, the ** operator has precedence over the minus operator, and the square is then executed before the negation. Hence, the negative results. It is useful to process, correctly, parenthesises, but not integers.

.. image:: ../images/squared_negative.png

* `Operator Precedence <https://www.php.net/manual/en/language.operators.precedence.php>`_


