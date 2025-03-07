.. _classes-constant-disambiguation-with-parenthesis:

Classes Constant Disambiguation With Parenthesis
------------------------------------------------

.. meta::
	:description:
		Classes Constant Disambiguation With Parenthesis: The ``::`` operator and the ``instanceof`` operators work on class names only.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Classes Constant Disambiguation With Parenthesis
	:twitter:description: Classes Constant Disambiguation With Parenthesis: The ``::`` operator and the ``instanceof`` operators work on class names only
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/class_const_confusion.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/class_const_confusion.png
	:og:title: Classes Constant Disambiguation With Parenthesis
	:og:type: article
	:og:description: The ``::`` operator and the ``instanceof`` operators work on class names only
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/class_const_confusion.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_const_confusion.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_const_confusion.html","name":"Classes Constant Disambiguation With Parenthesis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Mar 2025 18:34:36 +0000","dateModified":"Fri, 07 Mar 2025 18:34:36 +0000","description":"The ``::`` operator and the ``instanceof`` operators work on class names only","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_const_confusion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

The ``::`` operator and the ``instanceof`` operators work on class names only. Even if a constant with the same name holds an object, it is not used unless being dereferenced, via usage of parenthesis.

.. image:: ../images/class_const_confusion.png

See Also
________

* `Classes Only <https://3v4l.org/XsH0k>`_

