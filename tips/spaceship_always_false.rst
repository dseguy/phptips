.. _spaceship-always-false:

Spaceship Always False
----------------------

.. meta::
	:description:
		Spaceship Always False: Compare A to B, and A is bigger than B.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Spaceship Always False
	:twitter:description: Spaceship Always False: Compare A to B, and A is bigger than B
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/spaceship_always_false.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/spaceship_always_false.png
	:og:title: Spaceship Always False
	:og:type: article
	:og:description: Compare A to B, and A is bigger than B
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/spaceship_always_false.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/spaceship_always_false.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/spaceship_always_false.html","name":"Spaceship Always False","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:29+00:00","dateModified":"2026-07-14T14:33:29+00:00","description":"Compare A to B, and A is bigger than B","inLanguage":"en-US","author":{"@id":"https:\/\/bsky.app\/profile\/jerome.tamarelle.net"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/spaceship_always_false.html"]}]},{"@type":"Person","@id":"https:\/\/bsky.app\/profile\/jerome.tamarelle.net","name":"Jerome Tamarelle","url":"https:\/\/bsky.app\/profile\/jerome.tamarelle.net","sameAs":["https:\/\/bsky.app\/profile\/jerome.tamarelle.net"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Jerome Tamarelle <https://bsky.app/profile/jerome.tamarelle.net>`_

.. code-block:: php

   <?php
   
   class A {}
   class B {}
   
   $a = new A;
   $b = new B;
   
   var_dump($a <=> $b); // 1: A > B
   var_dump($b <=> $a); // 1: B > A 
   var_dump($b == $a);  // false


Compare A to B, and A is bigger than B.

Compare B to A, and B is bigger than A.

And, in the end, they are still different.

See Also
________

* `Comparing two objects <https://3v4l.org/gBecg#veol>`_ [Try me]


PHP Features
____________

* `spaceship <https://php-dictionary.readthedocs.io/en/latest/dictionary/spaceship.ini.html>`_

* `object <https://php-dictionary.readthedocs.io/en/latest/dictionary/object.ini.html>`_

* `comparison <https://php-dictionary.readthedocs.io/en/latest/dictionary/comparison.ini.html>`_



Last updated: 14 July 2026