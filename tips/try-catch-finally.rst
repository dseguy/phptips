.. _try-catch-finally-are-all-optional:

try, catch, finally Are All Optional
------------------------------------

.. meta::
	:description:
		try, catch, finally Are All Optional: The finally clause in a try-catch-finally is actually optional: it can be omitted.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: try, catch, finally Are All Optional
	:twitter:description: try, catch, finally Are All Optional: The finally clause in a try-catch-finally is actually optional: it can be omitted
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/try-catch-finally.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/try-catch-finally.png
	:og:title: try, catch, finally Are All Optional
	:og:type: article
	:og:description: The finally clause in a try-catch-finally is actually optional: it can be omitted
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/try-catch-finally.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/try-catch-finally.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/try-catch-finally.html","name":"try, catch, finally Are All Optional","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:44+00:00","dateModified":"2026-07-14T14:33:44+00:00","description":"The finally clause in a try-catch-finally is actually optional: it can be omitted","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/try-catch-finally.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   try {
       doSomething();
   } catch (Exception $e) {
       processException($e);
   } finally {
       cleanupWork();
   }
   
   // finally is optional
   try {
       doSomething();
   } catch (Exception $e) {
       processException($e);
   }
   
   // catch is optional
   try {
       doSomething();
   }
   
   // In the end, catch is also optional
       doSomething();
   
   ?>


The finally clause in a try-catch-finally is actually optional: it can be omitted.

The catch clauses in a try-catch-finally are also optional: they can be omitted.

When the catch and finally clauses are all omitted, the try clause can also be omitted safely.

See Also
________

* `Try-catch-finally are optional <https://3v4l.org/jOtGX>`_ [Try me]


PHP Features
____________

* `catch <https://php-dictionary.readthedocs.io/en/latest/dictionary/catch.ini.html>`_

* `try-catch <https://php-dictionary.readthedocs.io/en/latest/dictionary/try-catch.ini.html>`_

* `finally <https://php-dictionary.readthedocs.io/en/latest/dictionary/finally.ini.html>`_

* `exception <https://php-dictionary.readthedocs.io/en/latest/dictionary/exception.ini.html>`_



Last updated: 14 July 2026