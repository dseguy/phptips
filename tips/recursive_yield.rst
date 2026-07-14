.. _recursive-generator:

Recursive Generator
-------------------

.. meta::
	:description:
		Recursive Generator: Generators in PHP, when using the ``yield`` keyword, can become recursive through the use of the ``yield from`` construct.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Recursive Generator
	:twitter:description: Recursive Generator: Generators in PHP, when using the ``yield`` keyword, can become recursive through the use of the ``yield from`` construct
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/recursive_yield.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/recursive_yield.png
	:og:title: Recursive Generator
	:og:type: article
	:og:description: Generators in PHP, when using the ``yield`` keyword, can become recursive through the use of the ``yield from`` construct
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/recursive_yield.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_yield.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_yield.html","name":"Recursive Generator","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:12+00:00","dateModified":"2026-07-14T14:33:12+00:00","description":"Generators in PHP, when using the ``yield`` keyword, can become recursive through the use of the ``yield from`` construct","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursive_yield.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function foo() {
       static $f = 0;
       yield ++$f;
       yield from goo();
   }
   
   function goo() {
       static $g = 'a';
       yield ++$g;
       yield from foo();
   }
   
   foreach (foo() as $foo) {
       print $foo.PHP_EOL;
   }
   
   ?>


Generators in PHP, when using the ``yield`` keyword, can become recursive through the use of the ``yield from`` construct. This allows a generator to delegate part of its iteration to another generator, creating a chain of generators. However, this recursive behavior is only effective when the generator is consumed by an external iteration mechanism such as a ``foreach()`` loop or a function like ``iterator_to_array()``. Without such iteration, the recursive yielding will not be triggered or evaluated.

See Also
________

* `recursive yielding functions <https://3v4l.org/kpOuk>`_ [Try me]


PHP Features
____________

* `yield <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield.ini.html>`_

* `yield-from <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield-from.ini.html>`_

* `recursion <https://php-dictionary.readthedocs.io/en/latest/dictionary/recursion.ini.html>`_

* `generator <https://php-dictionary.readthedocs.io/en/latest/dictionary/generator.ini.html>`_



Last updated: 14 July 2026