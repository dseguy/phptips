.. _checking-for-names-at-different-times:

Checking For Names At Different Times
-------------------------------------

.. meta::
	:description:
		Checking For Names At Different Times: PHP lint detects early to avoid ``redeclared functions``, based on the local PHP executable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Checking For Names At Different Times
	:twitter:description: Checking For Names At Different Times: PHP lint detects early to avoid ``redeclared functions``, based on the local PHP executable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/check_for_names.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/check_for_names.png
	:og:title: Checking For Names At Different Times
	:og:type: article
	:og:description: PHP lint detects early to avoid ``redeclared functions``, based on the local PHP executable
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/check_for_names.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/check_for_names.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/check_for_names.html","name":"Checking For Names At Different Times","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:01+00:00","dateModified":"2026-07-14T14:31:01+00:00","description":"PHP lint detects early to avoid ``redeclared functions``, based on the local PHP executable","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/check_for_names.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   
   class stdClass {}
   // Checked at execution time
   
   interface Iterator {}
   // Checked at execution time
   
   function mb_substr() {}
   // Checked at compile time


PHP lint detects early to avoid ``redeclared functions``, based on the local PHP executable.

``php -l => Cannot redeclare mb_substr()``.

That detection doesn't apply to CITE until execution.

``php => Cannot declare class stdClass``

because the name is already in use``. This is a difference in processing similar information, which may cause late surprises.

See Also
________

* `When to check for name <https://3v4l.org/eT5rs>`_ [Try me]


PHP Features
____________

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `function <https://php-dictionary.readthedocs.io/en/latest/dictionary/function.ini.html>`_

* `cite <https://php-dictionary.readthedocs.io/en/latest/dictionary/cite.ini.html>`_



Last updated: 14 July 2026