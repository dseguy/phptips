.. _no-rewrite-for-exit:

No Rewrite For Exit
-------------------

.. meta::
	:description:
		No Rewrite For Exit: Since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Rewrite For Exit
	:twitter:description: No Rewrite For Exit: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/noExitRewrite.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/noExitRewrite.png
	:og:title: No Rewrite For Exit
	:og:type: article
	:og:description: Since PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/noExitRewrite.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/noExitRewrite.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/noExitRewrite.html","name":"No Rewrite For Exit","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:38+00:00","dateModified":"2026-07-14T14:32:38+00:00","description":"Since PHP 8","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/noExitRewrite.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   namespace A;
   
   use function foo as exit;
   
   function foo() {
       print "FOO!
   ";
       exit();
   }


Since PHP 8.4, ``exit()`` is also a function, and may be called as such.

Yet, it is still a PHP keyword, so it cannot be used as a function name: this would allow creating functions with that name in namespaces. On the other hand, it is possible to use that name as a method name.

And it is also not possible to use ``exit`` in a ``use`` command: that would allow rewriting exit with another function.

See Also
________

* `exit (PHP manual) <https://www.php.net/manual/en/function.exit.php>`_
* `No use for exit <https://3v4l.org/QukZb>`_ [Try me]


PHP Error Messages
__________________

* `syntax error, unexpected token "exit", expecting identifier <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22exit%22.html>`_



PHP Features
____________

* `exit <https://php-dictionary.readthedocs.io/en/latest/dictionary/exit.ini.html>`_

* `use <https://php-dictionary.readthedocs.io/en/latest/dictionary/use.ini.html>`_

* `relaxed-syntax <https://php-dictionary.readthedocs.io/en/latest/dictionary/relaxed-syntax.ini.html>`_



Last updated: 14 July 2026