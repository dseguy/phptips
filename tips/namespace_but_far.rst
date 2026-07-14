.. _namespace-but-far-in-the-name:

Namespace, But Far In The Name
------------------------------

.. meta::
	:description:
		Namespace, But Far In The Name: Namespaces can be named anything, except ``namespace``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Namespace, But Far In The Name
	:twitter:description: Namespace, But Far In The Name: Namespaces can be named anything, except ``namespace``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/namespace_but_far.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/namespace_but_far.png
	:og:title: Namespace, But Far In The Name
	:og:type: article
	:og:description: Namespaces can be named anything, except ``namespace``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/namespace_but_far.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace_but_far.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace_but_far.html","name":"Namespace, But Far In The Name","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:34:53+00:00","dateModified":"2026-07-14T14:34:53+00:00","description":"Namespaces can be named anything, except ``namespace``","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace_but_far.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   // Not allowed
   namespace namespace {}
   
   //syntax error, unexpected namespace-relative name "namespace\A", expecting "{" 
   namespace namespace\A {}
   
   // namespace may be used, but not in first position
   // surely, not a good idea
   namespace A\namespace {
       const B = 1;
   }
   
   namespace A {
       echo namespace\namespace\B;
   }
   
   ?>


Namespaces can be named anything, except ``namespace``. That keyword is used as a prefix, on a name (class, function, constant, etc.) to represent the current namespace, and allow for relative sub-namespaces.

Then, the ``namespace`` keyword cannot be used as the first part of a namespace, as it would conflict with the ``namespace`` relative part.

But it is possible to use ``namespace`` later in the name.

See Also
________

* `namespace (PHP manual) <https://www.php.net/manual/en/language.namespaces.nsconstants.php>`_
* `namespace in a namespace <https://3v4l.org/gQie5>`_ [Try me]


PHP Error Messages
__________________

* `Cannot use 'namespace' as namespace name <https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27namespace%27-as-namespace-name.html>`_



PHP Features
____________

* `namespace <https://php-dictionary.readthedocs.io/en/latest/dictionary/namespace.ini.html>`_

* `keyword <https://php-dictionary.readthedocs.io/en/latest/dictionary/keyword.ini.html>`_



Last updated: 14 July 2026