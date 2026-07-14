.. _eval-and-__file__:

eval() And __FILE__
-------------------

.. meta::
	:description:
		eval() And __FILE__: __FILE__ is a magic constant that holds the current file full path.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: eval() And __FILE__
	:twitter:description: eval() And __FILE__: __FILE__ is a magic constant that holds the current file full path
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/eval_and__FILE__.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/eval_and__FILE__.png
	:og:title: eval() And __FILE__
	:og:type: article
	:og:description: __FILE__ is a magic constant that holds the current file full path
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/eval_and__FILE__.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/eval_and__FILE__.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/eval_and__FILE__.html","name":"eval() And __FILE__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:36 +0000","dateModified":"Tue, 14 Jul 2026 14:31:36 +0000","description":"__FILE__ is a magic constant that holds the current file full path","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/eval_and__FILE__.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   eval(' echo "__FILE__ is not `'.__FILE__.'` in `" .  __FILE__."`"; ');


__FILE__ is a magic constant that holds the current file full path. This is not true when using it inside eval(), which comes with an extra suffix that tell it is executed in eval(). In fact, eval() has its own __FILE__, since it is executed in a sandboxed and temporary area.

See Also
________

* `__FILE__ in eval() <https://3v4l.org/TTNvC#v8.5.8>`_ [Try me]


PHP Features
____________

* `eval <https://php-dictionary.readthedocs.io/en/latest/dictionary/eval.ini.html>`_

* `magic-constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/magic-constant.ini.html>`_

* `__file__ <https://php-dictionary.readthedocs.io/en/latest/dictionary/__file__.ini.html>`_


