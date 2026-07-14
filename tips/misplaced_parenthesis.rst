.. _a-case-of-misplaced-parenthesis:

A Case Of Misplaced Parenthesis
-------------------------------

.. meta::
	:description:
		A Case Of Misplaced Parenthesis: The closing parenthesis of the in_array() call may be misplaced, yet yield a valid PHP code, and even, a valid business case.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A Case Of Misplaced Parenthesis
	:twitter:description: A Case Of Misplaced Parenthesis: The closing parenthesis of the in_array() call may be misplaced, yet yield a valid PHP code, and even, a valid business case
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/misplaced_parenthesis.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/misplaced_parenthesis.png
	:og:title: A Case Of Misplaced Parenthesis
	:og:type: article
	:og:description: The closing parenthesis of the in_array() call may be misplaced, yet yield a valid PHP code, and even, a valid business case
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/misplaced_parenthesis.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/misplaced_parenthesis.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/misplaced_parenthesis.html","name":"A Case Of Misplaced Parenthesis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:32:22 +0000","dateModified":"Tue, 14 Jul 2026 14:32:22 +0000","description":"The closing parenthesis of the in_array() call may be misplaced, yet yield a valid PHP code, and even, a valid business case","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/misplaced_parenthesis.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   // suspicious and legit
   if (in_array($a, $b, $c === true)) {}
   
   // could it be this one? 
   if (in_array($a, $b, $c) === true) {}


The closing parenthesis of the in_array() call may be misplaced, yet yield a valid PHP code, and even, a valid business case. This all depends on the actual value given to the $c variable.

It is most probably a bug, given the number of arguments in in_array().

See Also
________

* `When placing the parenthesis is ambiguous <https://3v4l.org/YN2FK>`_ [Try me]


PHP Features
____________

* `php <https://php-dictionary.readthedocs.io/en/latest/dictionary/php.ini.html>`_

* `typo <https://php-dictionary.readthedocs.io/en/latest/dictionary/typo.ini.html>`_


