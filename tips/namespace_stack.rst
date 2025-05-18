.. _the-namespace-stack:

The Namespace Stack
-------------------

.. meta::
	:description:
		The Namespace Stack: This is a reminder that namespaces are not nested, but are merely prefixes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The Namespace Stack
	:twitter:description: The Namespace Stack: This is a reminder that namespaces are not nested, but are merely prefixes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/namespace_stack.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/namespace_stack.png
	:og:title: The Namespace Stack
	:og:type: article
	:og:description: This is a reminder that namespaces are not nested, but are merely prefixes
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/namespace_stack.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace_stack.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace_stack.html","name":"The Namespace Stack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 18 May 2025 14:49:06 +0000","dateModified":"Sun, 18 May 2025 14:49:06 +0000","description":"This is a reminder that namespaces are not nested, but are merely prefixes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace_stack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

This is a reminder that namespaces are not nested, but are merely prefixes. Hence, there is the current namespace, and the global one for the occasional fallback, but nothing in between. Namespaces are not folders, even when they are stored as such.

.. image:: ../images/namespace_stack.png

See Also
________

* `Namespace (PHP manual) <https://www.php.net/manual/en/language.namespaces.php>`_
* `Namespace is local or global <https://3v4l.org/FekcH>`_

