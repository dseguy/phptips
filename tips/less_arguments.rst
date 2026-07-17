.. _less-arguments-in-child-method:

Less Arguments In Child Method
------------------------------

.. meta::
	:description:
		Less Arguments In Child Method: It is possible to have less arguments in the child method than in the parent one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Less Arguments In Child Method
	:twitter:description: Less Arguments In Child Method: It is possible to have less arguments in the child method than in the parent one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/less_arguments.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/less_arguments.png
	:og:title: Less Arguments In Child Method
	:og:type: article
	:og:description: It is possible to have less arguments in the child method than in the parent one
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/less_arguments.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/less_arguments.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/less_arguments.html","name":"Less Arguments In Child Method","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-17T13:44:11+00:00","dateModified":"2026-07-17T13:44:11+00:00","description":"It is possible to have less arguments in the child method than in the parent one","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/less_arguments.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x {
       function foo(int $a, string $c, string ...$b) {}    
   }
   
   // OK
   class y extends x {
       function foo(int $a, string ...$b) {}    
   }


It is possible to have less arguments in the child method than in the parent one. This is thanks to variadic.

In general, the number of arguments must grow, and, at best, the extra arguments have to be made optional.

That does not apply when there is a variadic argument, and the previous arguments are of the same type. In that case, the child method can have less named arguments than in the parent class. Technically, it goes from 'one or more' string argument, down to 'zero or more'.

All is in the compatibility between the parent and the child class.

Note that it is not possible to apply this if the previous argument is not of the same type as the variadic one. Nor it is possible to add a new argument, even if it looks extracted from the variadic. Both are not compatible with the parent class.

See Also
________

* `Less arguments in chile method <https://3v4l.org/UAV5t#veol>`_ [Try me]


PHP Error Messages
__________________

* `Declaration of y::foo(int $a, string ...$b) should be compatible with x::foo(int $a, string $c, string ...$b) <https://php-errors.readthedocs.io/en/latest/messages/declaration-of-%25s%3A%3A%25s%28%29-must-be-compatible-with-%25s%3A%3A%25s%28%29.html>`_



PHP Features
____________

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_

* `compatibility <https://php-dictionary.readthedocs.io/en/latest/dictionary/compatibility.ini.html>`_

* `argument <https://php-dictionary.readthedocs.io/en/latest/dictionary/argument.ini.html>`_

* `variadic <https://php-dictionary.readthedocs.io/en/latest/dictionary/variadic.ini.html>`_



Last updated: 17 July 2026