.. _another-cast-to-int:

Another Cast To Int
-------------------

.. meta::
	:description:
		Another Cast To Int: Another way to cast a value to int, besides the obvious ``(int)`` operator and the classic ``+ 0``, is to use the unary operator ``+`` operator on a variable: it add a sign operation on the variable, and the ``+`` sign is invariant: yet, the content of the variable is turned into an integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Another Cast To Int
	:twitter:description: Another Cast To Int: Another way to cast a value to int, besides the obvious ``(int)`` operator and the classic ``+ 0``, is to use the unary operator ``+`` operator on a variable: it add a sign operation on the variable, and the ``+`` sign is invariant: yet, the content of the variable is turned into an integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/cast_to_int.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/cast_to_int.png
	:og:title: Another Cast To Int
	:og:type: article
	:og:description: Another way to cast a value to int, besides the obvious ``(int)`` operator and the classic ``+ 0``, is to use the unary operator ``+`` operator on a variable: it add a sign operation on the variable, and the ``+`` sign is invariant: yet, the content of the variable is turned into an integer
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/cast_to_int.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_to_int.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_to_int.html","name":"Another Cast To Int","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:30:58+00:00","dateModified":"2026-07-14T14:30:58+00:00","description":"Another way to cast a value to int, besides the obvious ``(int)`` operator and the classic ``+ 0``, is to use the unary operator ``+`` operator on a variable: it add a sign operation on the variable, and the ``+`` sign is invariant: yet, the content of the variable is turned into an integer","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_to_int.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $a = '2';
   
   $b = +$a;
   
   var_dump($b);
   
   ?>


Another way to cast a value to int, besides the obvious ``(int)`` operator and the classic ``+ 0``, is to use the unary operator ``+`` operator on a variable: it add a sign operation on the variable, and the ``+`` sign is invariant: yet, the content of the variable is turned into an integer.

See Also
________

* `Another cast to int <https://3v4l.org/qmWik>`_ [Try me]


PHP Features
____________

* `integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/integer.ini.html>`_

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_



Last updated: 14 July 2026