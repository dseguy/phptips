.. _send-an-argument-to-generator:

Send An Argument To Generator
-----------------------------

.. meta::
	:description:
		Send An Argument To Generator: When calling the method send() on a PHP generator, the result of the first yield keyword is the argument value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Send An Argument To Generator
	:twitter:description: Send An Argument To Generator: When calling the method send() on a PHP generator, the result of the first yield keyword is the argument value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/send_to_generator.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/send_to_generator.png
	:og:title: Send An Argument To Generator
	:og:type: article
	:og:description: When calling the method send() on a PHP generator, the result of the first yield keyword is the argument value
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/send_to_generator.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/send_to_generator.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/send_to_generator.html","name":"Send An Argument To Generator","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:24+00:00","dateModified":"2026-07-14T14:33:24+00:00","description":"When calling the method send() on a PHP generator, the result of the first yield keyword is the argument value","inLanguage":"en-US","author":{"@id":"https:\/\/twitter.com\/rcsofttech85"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/send_to_generator.html"]}]},{"@type":"Person","@id":"https:\/\/twitter.com\/rcsofttech85","name":"Rahul Chavan","url":"https:\/\/twitter.com\/rcsofttech85","sameAs":["https:\/\/twitter.com\/rcsofttech85"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Rahul Chavan <https://twitter.com/rcsofttech85>`_

.. code-block:: php

   <?php
   
   function checkEvenOrOdd() {
       $value = yield;
       
       yield ($value % 2 === 0) ? "Even: $value" : "Odd: $value";
   }
   
   $evenOddChecker = checkEvenOrOdd();
   
   echo $evenOddChecker->send(7). PHP_EOL;


When calling the method send() on a PHP generator, the result of the first yield keyword is the argument value. Then, it can be used to yield a specific result.

Upon usage on a foreach(), that generator will generate 2 values.

Generator::send() only accepts one argument.

See Also
________

* `Generator::send() <https://www.php.net/manual/en/generator.send.php>`_
* `Typed Variables <https://3v4l.org/I7AQN>`_ [Try me]


PHP Features
____________

* `generator <https://php-dictionary.readthedocs.io/en/latest/dictionary/generator.ini.html>`_

* `argument <https://php-dictionary.readthedocs.io/en/latest/dictionary/argument.ini.html>`_



Last updated: 14 July 2026