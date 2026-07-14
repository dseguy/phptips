.. _relaxed-syntax-with-const:

Relaxed Syntax With Const
-------------------------

.. meta::
	:description:
		Relaxed Syntax With Const: Relaxed syntax is the possibility to use PHP keywords as method or class constant names.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Relaxed Syntax With Const
	:twitter:description: Relaxed Syntax With Const: Relaxed syntax is the possibility to use PHP keywords as method or class constant names
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/relaxed_syntax_with_const.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/relaxed_syntax_with_const.png
	:og:title: Relaxed Syntax With Const
	:og:type: article
	:og:description: Relaxed syntax is the possibility to use PHP keywords as method or class constant names
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/relaxed_syntax_with_const.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/relaxed_syntax_with_const.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/relaxed_syntax_with_const.html","name":"Relaxed Syntax With Const","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:15 +0000","dateModified":"Tue, 14 Jul 2026 14:33:15 +0000","description":"Relaxed syntax is the possibility to use PHP keywords as method or class constant names","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/relaxed_syntax_with_const.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x {
       const array = [];
       const int   = 2;
   }
   
   print_r(x::array);
   echo x::int;
   echo x::class;
   
   ?>


Relaxed syntax is the possibility to use PHP keywords as method or class constant names. This leads to funny expressions, that look like something else.

The only forbidden keyword is ``class``, as it is used to report the name of the current class.

See Also
________

* `Relaxed syntax with const <https://3v4l.org/fiaHc>`_ [Try me]


PHP Features
____________

* `const <https://php-dictionary.readthedocs.io/en/latest/dictionary/const.ini.html>`_

* `relaxed-syntax <https://php-dictionary.readthedocs.io/en/latest/dictionary/relaxed-syntax.ini.html>`_


