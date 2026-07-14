.. _no-self-referencing-constants:

No Self Referencing Constants
-----------------------------

.. meta::
	:description:
		No Self Referencing Constants: It is not possible to define a recursive PHP class constant, although it is possible to write it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Self Referencing Constants
	:twitter:description: No Self Referencing Constants: It is not possible to define a recursive PHP class constant, although it is possible to write it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/self-referencing-constants.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/self-referencing-constants.png
	:og:title: No Self Referencing Constants
	:og:type: article
	:og:description: It is not possible to define a recursive PHP class constant, although it is possible to write it
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/self-referencing-constants.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/self-referencing-constants.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/self-referencing-constants.html","name":"No Self Referencing Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:21 +0000","dateModified":"Tue, 14 Jul 2026 14:33:21 +0000","description":"It is not possible to define a recursive PHP class constant, although it is possible to write it","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/self-referencing-constants.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x {
       const A = x::A + 1;
       
       const B = x::C + 1;
       const C = x::B + 1;
       
   }


It is not possible to define a recursive PHP class constant, although it is possible to write it. A self referencing constant may be with itself, or it may use a complex right of class definitions before failing.

There is a dedicated PHP error message for this situation: 'Cannot declare self-referencing constant'.

One fun aspect is that the is not detected at compilation time, but at execution time, when the constant is actually used. The problem may lie dormant for a long time before revealing itself.

The error is also moved by other reported when several constants are compounded to build one, in a cyclic fashion.

See Also
________

* `Cannot declare self-referencing constant <https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-self-referencing-constant.html>`_
* `Self Referencing Constants <https://3v4l.org/QjKnC>`_ [Try me]


PHP Error Messages
__________________

* `Cannot declare self-referencing constant x::A <https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-self-referencing-constant.html>`_



PHP Features
____________

* `constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/constant.ini.html>`_

* `self <https://php-dictionary.readthedocs.io/en/latest/dictionary/self.ini.html>`_

* `static-expression <https://php-dictionary.readthedocs.io/en/latest/dictionary/static-expression.ini.html>`_


