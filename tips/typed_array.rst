.. _typed-array:

Typed Array
-----------

.. meta::
	:description:
		Typed Array: It is possible to set the type of all elements in a variadic: this is equivalent of passing an argument of type ``array<User>``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Typed Array
	:twitter:description: Typed Array: It is possible to set the type of all elements in a variadic: this is equivalent of passing an argument of type ``array<User>``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/typed_array.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/typed_array.png
	:og:title: Typed Array
	:og:type: article
	:og:description: It is possible to set the type of all elements in a variadic: this is equivalent of passing an argument of type ``array<User>``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/typed_array.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/typed_array.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/typed_array.html","name":"Typed Array","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:46+00:00","dateModified":"2026-07-14T14:33:46+00:00","description":"It is possible to set the type of all elements in a variadic: this is equivalent of passing an argument of type ``array<User>``","inLanguage":"en-US","author":{"@id":"https:\/\/bsky.app\/profile\/devatreides.bsky.social"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/typed_array.html"]}]},{"@type":"Person","@id":"https:\/\/bsky.app\/profile\/devatreides.bsky.social","name":"\u2022 Kartoffeljunge \u2022","url":"https:\/\/bsky.app\/profile\/devatreides.bsky.social","sameAs":["https:\/\/bsky.app\/profile\/devatreides.bsky.social"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `• Kartoffeljunge • <https://bsky.app/profile/devatreides.bsky.social>`_

.. code-block:: php

   <?php
   
   class User {}
   
   function handle(User ...$userList) {
       print count($userList)." users
   ";
       /** ... */
   }
   
   $bunchOfUsers = [
       new User(),
       new User(),
       ];
       
   echo handle(...$bunchOfUsers);
   
   $bunchOfUsers[] = 1;
   echo handle(...$bunchOfUsers); // error!$bunchOfUsers


It is possible to set the type of all elements in a variadic: this is equivalent of passing an argument of type ``array<User>``. That way, all the elements in the array must have the expected type. Use union-type to make have several distinct types.

See Also
________

* `Original on BluSky <https://bsky.app/profile/devatreides.bsky.social/post/3l3bwchdism2s>`_
* `Typing a whole array <https://3v4l.org/Ov9mJ>`_ [Try me]


PHP Features
____________

* `variadic <https://php-dictionary.readthedocs.io/en/latest/dictionary/variadic.ini.html>`_

* `type <https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html>`_

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_



Last updated: 14 July 2026