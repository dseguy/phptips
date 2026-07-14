.. _call-echo-with-commas:

Call echo With Commas
---------------------

.. meta::
	:description:
		Call echo With Commas: The most efficient way to call echo is to use commas.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call echo With Commas
	:twitter:description: Call echo With Commas: The most efficient way to call echo is to use commas
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/echo-comma.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/echo-comma.png
	:og:title: Call echo With Commas
	:og:type: article
	:og:description: The most efficient way to call echo is to use commas
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/echo-comma.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/echo-comma.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/echo-comma.html","name":"Call echo With Commas","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:30+00:00","dateModified":"2026-07-14T14:31:30+00:00","description":"The most efficient way to call echo is to use commas","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/echo-comma.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
     
   echo 'a', 'b', 'c'; // abc
   echo ('a' . 'b' . 'c'); // abc
   print('a' . 'b' . 'c'); // abc
   
   ?>


The most efficient way to call echo is to use commas. Each argument of echo is then sent to the output. Echo is not a function, but a language construct, with this special ability.

echo is sometimes used with parenthesis: it makes it look like an actual function call. Yet, it also reduces the number of arguments from arbitrary to one: there can be only one element inside a parenthesis.

Hence, any list of several arguments passed to echo is concatenated into one. This is a useless concatenation, as it is immediately discarded. And echoing the arguments one after the other does the same job.

In the end, it is a micro-optimisation anyway.

See Also
________

* `echo and print <https://3v4l.org/qi4pp#veol>`_ [Try me]


PHP Features
____________

* `echo <https://php-dictionary.readthedocs.io/en/latest/dictionary/echo.ini.html>`_

* `concatenation <https://php-dictionary.readthedocs.io/en/latest/dictionary/concatenation.ini.html>`_

* `print <https://php-dictionary.readthedocs.io/en/latest/dictionary/print.ini.html>`_

* `micro-optimisation <https://php-dictionary.readthedocs.io/en/latest/dictionary/micro-optimisation.ini.html>`_

* `language-construct <https://php-dictionary.readthedocs.io/en/latest/dictionary/language-construct.ini.html>`_



Last updated: 14 July 2026