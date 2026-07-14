.. _hypotenuse-in-action:

Hypotenuse In Action
--------------------

.. meta::
	:description:
		Hypotenuse In Action: PHP has a built-in Euclidean distance function, if you need to calculate a distance!.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hypotenuse In Action
	:twitter:description: Hypotenuse In Action: PHP has a built-in Euclidean distance function, if you need to calculate a distance!
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/hypot.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/hypot.png
	:og:title: Hypotenuse In Action
	:og:type: article
	:og:description: PHP has a built-in Euclidean distance function, if you need to calculate a distance!
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/hypot.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/hypot.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/hypot.html","name":"Hypotenuse In Action","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:53+00:00","dateModified":"2026-07-14T14:31:53+00:00","description":"PHP has a built-in Euclidean distance function, if you need to calculate a distance!","inLanguage":"en-US","author":{"@id":"https:\/\/x.com\/alexdaubois"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/hypot.html"]}]},{"@type":"Person","@id":"https:\/\/x.com\/alexdaubois","name":"Alexandre Daubois","url":"https:\/\/x.com\/alexdaubois","sameAs":["https:\/\/x.com\/alexdaubois"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Alexandre Daubois <https://x.com/alexdaubois>`_

.. code-block:: php

   <?php
   
   // distance between two 2D points
   $x1 = 3; $y1 = 4;
   $x2 = 7; $y2 = 1;
   
   $dist = hypot($x2 - $x1, $y2 - $y1); // 5.0
   
   // why not just sqrt(($dx)**2 + ($dy)**2)?
   // because hypot() avoids intermediate overflow
   
   // QUICK TIP STRAIGHT FROM GAME DEV: sometimes you only want to *compare* distances, and
   // square root is SLOW
   // in this case, just compare squared values, it's equivalent!
   $dx1 = $x2 - $x1;
   $dy1 = $y2 - $y1;
   $dist1Sq = $dx1 * $dx1 + $dy1 * $dy1;
   
   // some other points in space...
   $dist2Sq = $dx2 * $dx2 + $dy2 * $dy2;
   
   if ($dist1Sq < $dist2Sq) { // squared value compared, way faster without square root!
       echo "Point 2 is closer to Point 1
   ";
   } else {
       echo "Point 3 is closer to Point 1
   ";
   }


PHP has a built-in Euclidean distance function, if you need to calculate a distance!

Sounds complex, but it's just the hypotenus! Without the overflow risk of doing it manually.

If you ONLY need to *compare* distances, don't miss the tip at the end of the code snippet!

See Also
________

* `hypot (PHP manual) <https://www.php.net/manual/en/function.hypot.php>`_
* `Original Tweet <https://x.com/alexdaubois/status/2035990120688476239>`_
* `hypot in action <https://3v4l.org/Aacol#veol>`_ [Try me]


PHP Features
____________

* `hypot <https://php-dictionary.readthedocs.io/en/latest/dictionary/hypot.ini.html>`_

* `math <https://php-dictionary.readthedocs.io/en/latest/dictionary/math.ini.html>`_

* `sqrt <https://php-dictionary.readthedocs.io/en/latest/dictionary/sqrt.ini.html>`_



Last updated: 14 July 2026