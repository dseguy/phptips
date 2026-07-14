.. _url-as-comments:

URL As Comments
---------------

.. meta::
	:description:
		URL As Comments: The code below includes a raw URL in the code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: URL As Comments
	:twitter:description: URL As Comments: The code below includes a raw URL in the code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/URL_as_comments.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/URL_as_comments.png
	:og:title: URL As Comments
	:og:type: article
	:og:description: The code below includes a raw URL in the code
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/URL_as_comments.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/URL_as_comments.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/URL_as_comments.html","name":"URL As Comments","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:30:27+00:00","dateModified":"2026-07-14T14:30:27+00:00","description":"The code below includes a raw URL in the code","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/URL_as_comments.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   http://www.example.com/foo 
   function foo($a) {
       // what does this do?
   }
   
   ?>


The code below includes a raw URL in the code. PHP understand that code as a goto label, followed by a online comment starting with //. As such, the comment is valid, but cannot be repeated, as it would make a dual goto label, and PHP would raise an error.

See Also
________

* `A URL is valid PHP code?! <https://liamhammett.com/a-url-is-valid-php-code>`_
* `URL as comments <https://3v4l.org/3ifYo>`_ [Try me]


PHP Features
____________

* `goto <https://php-dictionary.readthedocs.io/en/latest/dictionary/goto.ini.html>`_

* `comment <https://php-dictionary.readthedocs.io/en/latest/dictionary/comment.ini.html>`_

* `label <https://php-dictionary.readthedocs.io/en/latest/dictionary/label.ini.html>`_

* `identifier <https://php-dictionary.readthedocs.io/en/latest/dictionary/identifier.ini.html>`_

* `syntax <https://php-dictionary.readthedocs.io/en/latest/dictionary/syntax.ini.html>`_



Last updated: 14 July 2026