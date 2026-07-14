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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call_function_with_strings.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call_function_with_strings.html","name":"Call Function With Strings","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:45:22+00:00","dateModified":"2026-07-14T14:45:22+00:00","description":"Usually, a function is called with its name as first element of the syntax","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call_function_with_strings.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function foo() { echo __FUNCTION__; }
   
   foo();
   'foo'();
   b'foo'();
   "foo"();
   
   $x = "oo";
   "f$x"();
   


Usually, a function is called with its name as first element of the syntax.

And it is also possible to use a string, either in a variable or directly as a literal. This means that adding single or double quotes to the name of a function is still a valid syntax.

Of course, there is still the left over binary string of PHP 6, so it is also possible to add an initial ``b`` to the string.

Then, the double quoted strings accepts interpolated variables, to make the call dynamic.

Finally, it is not possible to use the HereDoc syntax, as parenthesis are not allowed directly after the closing tag.

See Also
________

* `Function (PHP manual) <https://www.php.net/manual/en/language.functions.php>`_
* `Calling functions with strings <https://3v4l.org/K2JIq#v8.5.8>`_ [Try me]


PHP Features
____________

* `function <https://php-dictionary.readthedocs.io/en/latest/dictionary/function.ini.html>`_

* `string <https://php-dictionary.readthedocs.io/en/latest/dictionary/string.ini.html>`_



Last updated: 14 July 2026