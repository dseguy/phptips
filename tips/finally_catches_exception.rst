.. _finally-catches-exception:

Finally Catches Exception
-------------------------

.. meta::
	:description:
		Finally Catches Exception: In this code, finally is executed after the throw.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Finally Catches Exception
	:twitter:description: Finally Catches Exception: In this code, finally is executed after the throw
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/finally_catches_exception.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/finally_catches_exception.png
	:og:title: Finally Catches Exception
	:og:type: article
	:og:description: In this code, finally is executed after the throw
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/finally_catches_exception.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/finally_catches_exception.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/finally_catches_exception.html","name":"Finally Catches Exception","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:44+00:00","dateModified":"2026-07-14T14:31:44+00:00","description":"In this code, finally is executed after the throw","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/finally_catches_exception.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function foo() {
       try {
           throw new Exception('yeah');
       } finally {
           return 1;
       }
   }
   
   print foo();
   // print 1, no exception
   
   ?>


In this code, finally is executed after the throw. Since it contains a return, the function is finalized before the throw is executed. The exception is then lost, and the scripts displays 1. This is why it is recommended to avoid return in a finally clause.

See Also
________

* `Finally (PHP manual) <https://www.php.net/manual/en/language.exceptions.php#language.exceptions.finally>`_
* `Catch an exception with finally <https://3v4l.org/uVRJ3>`_ [Try me]


PHP Features
____________

* `finally <https://php-dictionary.readthedocs.io/en/latest/dictionary/finally.ini.html>`_

* `return <https://php-dictionary.readthedocs.io/en/latest/dictionary/return.ini.html>`_



Last updated: 14 July 2026