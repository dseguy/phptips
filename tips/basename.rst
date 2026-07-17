.. _basename-as-a-str_replace:

basename() As A str_replace()
-----------------------------

.. meta::
	:description:
		basename() As A str_replace(): The useless tip of the day is to use basename on any string, to remove unwanted last characters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: basename() As A str_replace()
	:twitter:description: basename() As A str_replace(): The useless tip of the day is to use basename on any string, to remove unwanted last characters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/basename.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/basename.png
	:og:title: basename() As A str_replace()
	:og:type: article
	:og:description: The useless tip of the day is to use basename on any string, to remove unwanted last characters
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/basename.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/basename.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/basename.html","name":"basename() As A str_replace()","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-17T09:51:30+00:00","dateModified":"2026-07-17T09:51:30+00:00","description":"The useless tip of the day is to use basename on any string, to remove unwanted last characters","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/basename.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   print basename('I made a catastrophe', 'astrophe');
   // pfious ... disaster avoided ? 
   
   ?>


The useless tip of the day is to use basename on any string, to remove unwanted last characters.

The official use is to remove the extension on the file name, but since paths are actually strings, it works. Just avoid strings with ``/`` character in them.

See Also
________

* `basename in action <https://3v4l.org/1M3Fv#v>`_ [Try me]


PHP Features
____________

* `basename <https://php-dictionary.readthedocs.io/en/latest/dictionary/basename.ini.html>`_

* `string <https://php-dictionary.readthedocs.io/en/latest/dictionary/string.ini.html>`_



Last updated: 17 July 2026