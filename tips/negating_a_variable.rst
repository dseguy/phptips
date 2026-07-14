.. _negating-an-assignation:

Negating An Assignation
-----------------------

.. meta::
	:description:
		Negating An Assignation: I always wondered why PHP allows to ``NOT`` a variable on the LEFT side of an assignation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Negating An Assignation
	:twitter:description: Negating An Assignation: I always wondered why PHP allows to ``NOT`` a variable on the LEFT side of an assignation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/negating_a_variable.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/negating_a_variable.png
	:og:title: Negating An Assignation
	:og:type: article
	:og:description: I always wondered why PHP allows to ``NOT`` a variable on the LEFT side of an assignation
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/negating_a_variable.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/negating_a_variable.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/negating_a_variable.html","name":"Negating An Assignation","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:30+00:00","dateModified":"2026-07-14T14:32:30+00:00","description":"I always wondered why PHP allows to ``NOT`` a variable on the LEFT side of an assignation","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/negating_a_variable.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   // $e contains the check
   !$e = checkSomething();
   
   // $e contains the check,
   // and the condition still passes
   if (!$e = checkSomething()) {
       print "Something was wrong!";
   }


I always wondered why PHP allows to ``NOT`` a variable on the LEFT side of an assignation.

It makes sense with an iffectation (an assignation within an if)

I'm sure other such expressions are possible, with unary operators.

Definitely not for me, for readability reasons; same as ``!$o instanceof X``.

See Also
________

* `Operator precedence (PHP manual) <https://www.php.net/manual/en/language.operators.precedence.php>`_
* `Don't negate conditions' <https://3v4l.org/OaqKp>`_ [Try me]


PHP Features
____________

* `not <https://php-dictionary.readthedocs.io/en/latest/dictionary/not.ini.html>`_

* `assignation <https://php-dictionary.readthedocs.io/en/latest/dictionary/assignation.ini.html>`_

* `iffectation <https://php-dictionary.readthedocs.io/en/latest/dictionary/iffectation.ini.html>`_



Last updated: 14 July 2026