.. _when-space-matters:

When Space Matters
------------------

.. meta::
	:description:
		When Space Matters: The two first echo are valid, because there is a space between the integer and the dot : PHP interpret them as a concatenation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: When Space Matters
	:twitter:description: When Space Matters: The two first echo are valid, because there is a space between the integer and the dot : PHP interpret them as a concatenation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/when_space_matters.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/when_space_matters.png
	:og:title: When Space Matters
	:og:type: article
	:og:description: The two first echo are valid, because there is a space between the integer and the dot : PHP interpret them as a concatenation
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/when_space_matters.html
	:og:locale: en

The two first echo are valid, because there is a space between the integer and the dot : PHP interpret them as a concatenation.

The third and fourth ones are a syntax error, because PHP starts interpreting a float, but fail to get the decimal part.

Finally, the last echo is valid, because PHP managed to build a float, so it doesn't mistake the second point with another float, and use it as a concatenation.

Some edge cases of white space matters in the syntax.

.. image:: ../images/when_space_matters.png



