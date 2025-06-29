.. _keywords-in-namespaces:

Keywords In Namespaces
----------------------

.. meta::
	:description:
		Keywords In Namespaces: Since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Keywords In Namespaces
	:twitter:description: Keywords In Namespaces: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/keywords_in_namespaces.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/keywords_in_namespaces.png
	:og:title: Keywords In Namespaces
	:og:type: article
	:og:description: Since PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/keywords_in_namespaces.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/keywords_in_namespaces.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/keywords_in_namespaces.html","name":"Keywords In Namespaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 20:11:41 +0000","dateModified":"Fri, 27 Jun 2025 20:11:41 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/keywords_in_namespaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Since PHP 8.0, it is possible to use PHP keywords in namespaces.

In PHP 8.0, namespaces are processed independently, for their literal value. Before then, each namespace level was a distinct token, separated by the namespace separator: PHP keyword would then run into a processing conflict. 

The last keyword that one can't still use in a namespace is namespace, when used as the first part of the namespace : it is later replaced dynamically by the current namespace.

.. image:: ../images/keywords_in_namespaces.png

See Also
________

* `Namespaces (PHP manual) <https://www.php.net/manual/en/language.namespaces.php>`_
* `keywords in namespaces <https://3v4l.org/9eHvZ>`_ [Try me]

