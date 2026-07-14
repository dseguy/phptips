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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/URL_as_comments.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/URL_as_comments.html","name":"URL As Comments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:30:27 +0000","dateModified":"Tue, 14 Jul 2026 14:30:27 +0000","description":"The code below includes a raw URL in the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/URL_as_comments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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


