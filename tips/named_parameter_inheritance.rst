.. _named-parameter-inheritance:

Named Parameter Inheritance
---------------------------

.. meta::
	:description:
		Named Parameter Inheritance: PHP enforces the methods compatibility with their types, names, and various options, but not with the parameter names.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Named Parameter Inheritance
	:twitter:description: Named Parameter Inheritance: PHP enforces the methods compatibility with their types, names, and various options, but not with the parameter names
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/named_parameter_inheritance.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/named_parameter_inheritance.png
	:og:title: Named Parameter Inheritance
	:og:type: article
	:og:description: PHP enforces the methods compatibility with their types, names, and various options, but not with the parameter names
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/named_parameter_inheritance.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/named_parameter_inheritance.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/named_parameter_inheritance.html","name":"Named Parameter Inheritance","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Sep 2025 17:48:53 +0000","dateModified":"Wed, 24 Sep 2025 17:48:53 +0000","description":"PHP enforces the methods compatibility with their types, names, and various options, but not with the parameter names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/named_parameter_inheritance.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/named_parameter_inheritance.png

PHP enforces the methods compatibility with their types, names, and various options, but not with the parameter names. This means the parameter name existence is enforced, but the name might change. It might change between the parent and the child, but also, between the class and the interface.

It is recommended to keep all these parameter's name identical, so as to keep consistence in the code, and simplify the usage of the method, with named parameters.

See Also
________

* `Function parameters and arguments (PHP manual) <https://www.php.net/manual/en/functions.arguments.php>`_
* `named parameter changes <https://3v4l.org/k3Rhl>`_ [Try me]


PHP Features
____________

* `bug <https://php-dictionary.readthedocs.io/en/latest/dictionary/bug.ini.html>`_

* `parameter <https://php-dictionary.readthedocs.io/en/latest/dictionary/parameter.ini.html>`_

* `named-parameter <https://php-dictionary.readthedocs.io/en/latest/dictionary/named-parameter.ini.html>`_

* `inheritance <https://php-dictionary.readthedocs.io/en/latest/dictionary/inheritance.ini.html>`_


