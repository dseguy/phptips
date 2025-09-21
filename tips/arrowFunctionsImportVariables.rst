.. _arrow-functions-import-variables-by-values:

Arrow Functions Import Variables By Values
------------------------------------------

.. meta::
	:description:
		Arrow Functions Import Variables By Values: Arrow functions automatically import the variables from the current context, to be used in its returned expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Arrow Functions Import Variables By Values
	:twitter:description: Arrow Functions Import Variables By Values: Arrow functions automatically import the variables from the current context, to be used in its returned expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/arrowFunctionsImportVariables.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/arrowFunctionsImportVariables.png
	:og:title: Arrow Functions Import Variables By Values
	:og:type: article
	:og:description: Arrow functions automatically import the variables from the current context, to be used in its returned expression
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/arrowFunctionsImportVariables.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/arrowFunctionsImportVariables.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/arrowFunctionsImportVariables.html","name":"Arrow Functions Import Variables By Values","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Sep 2025 20:04:52 +0000","dateModified":"Thu, 18 Sep 2025 20:04:52 +0000","description":"Arrow functions automatically import the variables from the current context, to be used in its returned expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/arrowFunctionsImportVariables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/arrowFunctionsImportVariables.png

Arrow functions automatically import the variables from the current context, to be used in its returned expression. It is still possible to assign a variable in such situation, by using an assignation in the return statement.

Yet, this does nothing, as the variable is imported by value, even when it is a reference in the first place. Hence, reading it access its value, but modifying it has no impact on the original context.

If the reference is important, the alternative is to use a closure, with a reference in the ``use(&$a)`` clause.

See Also
________

* `arrow-functions with references <https://3v4l.org/SZdGS>`_ [Try me]


PHP Features
____________

* `arrow-function <https://php-dictionary.readthedocs.io/en/latest/dictionary/arrow-function.ini.html>`_

* `closure <https://php-dictionary.readthedocs.io/en/latest/dictionary/closure.ini.html>`_

* `reference <https://php-dictionary.readthedocs.io/en/latest/dictionary/reference.ini.html>`_


