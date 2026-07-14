.. _namespace-namespace:

namespace namespace
-------------------

.. meta::
	:description:
		namespace namespace: The only forbidden name for a namespace is ``namespace``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: namespace namespace
	:twitter:description: namespace namespace: The only forbidden name for a namespace is ``namespace``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/namespace_namespace.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/namespace_namespace.png
	:og:title: namespace namespace
	:og:type: article
	:og:description: The only forbidden name for a namespace is ``namespace``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/namespace_namespace.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace_namespace.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace_namespace.html","name":"namespace namespace","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:29+00:00","dateModified":"2026-07-14T14:32:29+00:00","description":"The only forbidden name for a namespace is ``namespace``","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace_namespace.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   namespace namespace {}
   
   ?>


The only forbidden name for a namespace is ``namespace``. Not only is it confusing, but also, that keyword is used later for prefixing names. The correct names follow the usual PHP regex, with a leading letter or underscore, followed by a list of alpha-numeric characters; unicode beyond 255 are also used.

See Also
________

* `namespace namespace <https://3v4l.org/8TdKi>`_ [Try me]


PHP Features
____________

* `namespace <https://php-dictionary.readthedocs.io/en/latest/dictionary/namespace.ini.html>`_

* `eponymous <https://php-dictionary.readthedocs.io/en/latest/dictionary/eponymous.ini.html>`_

* `reserved-name <https://php-dictionary.readthedocs.io/en/latest/dictionary/reserved-name.ini.html>`_



Last updated: 14 July 2026