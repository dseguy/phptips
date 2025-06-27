.. _classes-constant-disambiguation-with-parenthesis:

Classes Constant Disambiguation With Parenthesis
------------------------------------------------

.. meta::
	:description:
		Classes Constant Disambiguation With Parenthesis: The ``::`` (scope resolution) operator and the instanceof operator in PHP are strictly designed to work with class names, not with variables or constants holding object instances.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Classes Constant Disambiguation With Parenthesis
	:twitter:description: Classes Constant Disambiguation With Parenthesis: The ``::`` (scope resolution) operator and the instanceof operator in PHP are strictly designed to work with class names, not with variables or constants holding object instances
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/class_const_confusion.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/class_const_confusion.png
	:og:title: Classes Constant Disambiguation With Parenthesis
	:og:type: article
	:og:description: The ``::`` (scope resolution) operator and the instanceof operator in PHP are strictly designed to work with class names, not with variables or constants holding object instances
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/class_const_confusion.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_const_confusion.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_const_confusion.html","name":"Classes Constant Disambiguation With Parenthesis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 07:21:34 +0000","dateModified":"Fri, 27 Jun 2025 07:21:34 +0000","description":"The ``::`` (scope resolution) operator and the instanceof operator in PHP are strictly designed to work with class names, not with variables or constants holding object instances","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_const_confusion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

The ``::`` (scope resolution) operator and the instanceof operator in PHP are strictly designed to work with class names, not with variables or constants holding object instances. Even when a constant exists with a name identical to a class, PHP will not automatically treat it as an object for these operators. The constant’s value, even if it holds an object, will not be used unless it is explicitly dereferenced. To dereference and force evaluation of the constant's value as an object, you must enclose the constant in parentheses. This ensures PHP evaluates the constant and retrieves the object it contains before applying the operator.

.. image:: ../images/class_const_confusion.png

See Also
________

* `Classes Only <https://3v4l.org/XsH0k>`_ [Try me]

