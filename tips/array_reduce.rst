.. _array_reduce-to-filter-and-alter:

array_reduce() To Filter And Alter
----------------------------------

.. meta::
	:description:
		array_reduce() To Filter And Alter: Using array_reduce() to create custom data structures goes beyond simple filtering.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_reduce() To Filter And Alter
	:twitter:description: array_reduce() To Filter And Alter: Using array_reduce() to create custom data structures goes beyond simple filtering
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/array_reduce.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/array_reduce.png
	:og:title: array_reduce() To Filter And Alter
	:og:type: article
	:og:description: Using array_reduce() to create custom data structures goes beyond simple filtering
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/array_reduce.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_reduce.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_reduce.html","name":"array_reduce() To Filter And Alter","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:30:42+00:00","dateModified":"2026-07-14T14:30:42+00:00","description":"Using array_reduce() to create custom data structures goes beyond simple filtering","inLanguage":"en-US","author":{"@id":"https:\/\/twitter.com\/rcsofttech85"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_reduce.html"]}]},{"@type":"Person","@id":"https:\/\/twitter.com\/rcsofttech85","name":"Rahul Chavan","url":"https:\/\/twitter.com\/rcsofttech85","sameAs":["https:\/\/twitter.com\/rcsofttech85"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Rahul Chavan <https://twitter.com/rcsofttech85>`_

.. code-block:: php

   <?php
   $users = [
       [
           "id" => 1,
           "name" => "rahul",
           "premium" => true,
           "purchases" => ["apple", "banana", "carrot"],
           "price" => 22,
           ],
       [        
           "id" => 2,
           "name" => "abhi",
           "premium" => false,
           "purchases" => ["apple", "banana", "carrot"],
           "price" => 22,
           ],
           [        
           "id" => 3,
           "name" => "kavita",
           "premium" => true,
           "purchases" => ["apple", "banana", "carrot", "orange"],
           "price" => 30,
           ],
       ];
   
   $premiumUsers = array_reduce(
       $users,
       function ($carry, $user) {
           if ($user['premium']) {
               $carry[] = [
                   "name" => $user["name"],
                   "purchases" => $user["purchases"],
                   "price" => $user["price"] - 2
                   ];
           }
           return $carry;
       },
       []
   );
   
   print_r($premiumUsers);
   
   /**
    * Array
   (
       [0] => Array
           (
               [name] => rahul
               [purchases] => Array
                   (
                       [0] => apple
                       [1] => banana
                       [2] => carrot
                   )
   
               [price] => 20
           )
   
       [1] => Array
           (
               [name] => kavita
               [purchases] => Array
                   (
                       [0] => apple
                       [1] => banana
                       [2] => carrot
                       [3] => orange
                   )
   
               [price] => 28
           )
   
   )
    */


Using array_reduce() to create custom data structures goes beyond simple filtering.

array_reduce() might save a second loop. Although, it might also be quite slow, in particular for large arrays (10 millions+).

array_reduce() doesn't provide keys when processing them.

See Also
________

* `Original Tweet <https://twitter.com/rcsofttech85/status/1753413840245534746>`_
* `array_reduce <https://www.php.net/manual/en/function.array-reduce.php>`_
* `array_filter <https://www.php.net/manual/en/function.array-filter.php>`_
* `array_reduce is drastically slower (~1000x) <https://github.com/php/php-src/issues/8283>`_
* `array_reduce() as a collector <https://3v4l.org/ZViTK>`_ [Try me]


PHP Features
____________

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `filter <https://php-dictionary.readthedocs.io/en/latest/dictionary/filter.ini.html>`_



Last updated: 14 July 2026