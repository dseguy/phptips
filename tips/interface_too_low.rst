.. _interface-implemented-too-low:

Interface Implemented Too Low
-----------------------------

.. meta::
	:description:
		Interface Implemented Too Low: An interface's signatures applies only to the current class and its children.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interface Implemented Too Low
	:twitter:description: Interface Implemented Too Low: An interface's signatures applies only to the current class and its children
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/interface_too_low.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/interface_too_low.png
	:og:title: Interface Implemented Too Low
	:og:type: article
	:og:description: An interface's signatures applies only to the current class and its children
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/interface_too_low.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface_too_low.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface_too_low.html","name":"Interface Implemented Too Low","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-15T18:00:19+00:00","dateModified":"2026-07-15T18:00:19+00:00","description":"An interface's signatures applies only to the current class and its children","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface_too_low.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   interface i {
       function foo($a, $b); 
   }
   
   class x {
       function foo() {}
   }
   
   class y extends x implements i {
       function foo($a = 1) {}
   }


An interface's signatures applies only to the current class and its children. It means that the parent do not have to use the same signature.

Although, the parent and the child must use a compatible signature, indepdently from the interface. And, in the end, the child signature must be compatible with both the parent and the interface.

While it may be convenient to use the interface on a single child and not on its siblings, it might be less surprising to use the interface on the parent directly. Unless it does not have such a method.

See Also
________

* `Interface on a child <https://3v4l.org/1Wari#v>`_ [Try me]


PHP Features
____________

* `interface <https://php-dictionary.readthedocs.io/en/latest/dictionary/interface.ini.html>`_

* `compatibility <https://php-dictionary.readthedocs.io/en/latest/dictionary/compatibility.ini.html>`_

* `parent <https://php-dictionary.readthedocs.io/en/latest/dictionary/parent.ini.html>`_



Last updated: 15 July 2026