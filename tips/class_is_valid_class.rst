.. _class-is-a-valid-type:

Class Is A Valid Type
---------------------

.. meta::
	:description:
		Class Is A Valid Type: PHP allows to use ``\class`` as a class name in a type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Is A Valid Type
	:twitter:description: Class Is A Valid Type: PHP allows to use ``\class`` as a class name in a type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/class_is_valid_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/class_is_valid_class.png
	:og:title: Class Is A Valid Type
	:og:type: article
	:og:description: PHP allows to use ``\class`` as a class name in a type
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/class_is_valid_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_is_valid_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_is_valid_class.html","name":"Class Is A Valid Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Mar 2025 10:45:34 +0000","dateModified":"Fri, 07 Mar 2025 10:45:34 +0000","description":"PHP allows to use ``\\class`` as a class name in a type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class_is_valid_class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP allows to use ``\class`` as a class name in a type. This is also the case for interfaces, enums, traits... and it is also valid for some others keywords.

On the other hand, a good number of PHP keywords are forbidden, and yield an error : ``\self`` is an invalid class name.

Of course, once this is typed like that, it is not possible to satisfy the type specification, and such code is actually not usable.

.. image:: ../images/class_is_valid_class.png

See Also
________

* `Can type \class, cannot type self <https://3v4l.org/OCfhi>`_ [Try me]

