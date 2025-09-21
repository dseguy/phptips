.. _call-function-with-strings:

Call Function With Strings
--------------------------

.. meta::
	:description:
		Call Function With Strings: Usually, a function is called with its name as first element of the syntax.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call Function With Strings
	:twitter:description: Call Function With Strings: Usually, a function is called with its name as first element of the syntax
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/call_function_with_strings.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/call_function_with_strings.png
	:og:title: Call Function With Strings
	:og:type: article
	:og:description: Usually, a function is called with its name as first element of the syntax
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/call_function_with_strings.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call_function_with_strings.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call_function_with_strings.html","name":"Call Function With Strings","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Jun 2025 12:04:19 +0000","dateModified":"Tue, 10 Jun 2025 12:04:19 +0000","description":"Usually, a function is called with its name as first element of the syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call_function_with_strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/call_function_with_strings.png

Usually, a function is called with its name as first element of the syntax.

And it is also possible to use a string, either in a variable or directly as a literal. This means that adding single or double quotes to the name of a function is still a valid syntax.

Of course, there is still the left over binary string of PHP 6, so it is also possible to add an initial ``b`` to the string.

Then, the double quoted strings accepts interpolated variables, to make the call dynamic.

Finally, it is not possible to use the HereDoc syntax, as parenthesis are not allowed directly after the closing tag.

See Also
________

* `Function (PHP manual) <https://www.php.net/manual/en/language.functions.php>`_


PHP Features
____________

* `function <https://php-dictionary.readthedocs.io/en/latest/dictionary/function.ini.html>`_

* `string <https://php-dictionary.readthedocs.io/en/latest/dictionary/string.ini.html>`_


