.. _const-without-parenthesis:

Const Without Parenthesis
-------------------------

.. meta::
	:description:
		Const Without Parenthesis: It is possible to put a single literal inside parenthesis: that's just the literal itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Const Without Parenthesis
	:twitter:description: Const Without Parenthesis: It is possible to put a single literal inside parenthesis: that's just the literal itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/const_without_parenthesis.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/const_without_parenthesis.png
	:og:title: Const Without Parenthesis
	:og:type: article
	:og:description: It is possible to put a single literal inside parenthesis: that's just the literal itself
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/const_without_parenthesis.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/const_without_parenthesis.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/const_without_parenthesis.html","name":"Const Without Parenthesis","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:18+00:00","dateModified":"2026-07-14T14:31:18+00:00","description":"It is possible to put a single literal inside parenthesis: that's just the literal itself","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/const_without_parenthesis.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   const A = 1;
   echo ( A ) + (3);
   
   const int = 2;
   echo ( int ); // syntax error!!


It is possible to put a single literal inside parenthesis: that's just the literal itself.

It is possible to put a single global constant inside parenthesis: that's just the global constant itself.

It is possible to create a constant called ``int``, because the name is not protected against usage, even if it is reserved for type and casting.

Then, it is not possible to ``int`` in parenthesis, because PHP confuses it with a cast.

See Also
________

* `Type Operators (PHP manual) <https://www.php.net/manual/en/language.operators.type.php>`_
* `(int) compilation error <https://3v4l.org/1Lt2o>`_ [Try me]


PHP Features
____________

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_

* `integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/integer.ini.html>`_

* `keyword <https://php-dictionary.readthedocs.io/en/latest/dictionary/keyword.ini.html>`_



Last updated: 14 July 2026