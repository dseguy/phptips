.. _comparing-nan:

Comparing NAN
-------------

.. meta::
	:description:
		Comparing NAN: PHP does not compare ``NAN`` values: it always fails, even if the source is the same.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Comparing NAN
	:twitter:description: Comparing NAN: PHP does not compare ``NAN`` values: it always fails, even if the source is the same
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/compare_nan.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/compare_nan.png
	:og:title: Comparing NAN
	:og:type: article
	:og:description: PHP does not compare ``NAN`` values: it always fails, even if the source is the same
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/compare_nan.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/compare_nan.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/compare_nan.html","name":"Comparing NAN","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:14+00:00","dateModified":"2026-07-14T14:31:14+00:00","description":"PHP does not compare ``NAN`` values: it always fails, even if the source is the same","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/compare_nan.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   //echo acos(3);
   var_dump(acos(3) === acos(3));
   var_dump(acos(3) == acos(3));
   
   // Note that NAN is a float and becomes 0
   var_dump($array = [acos(3) => 3]);
   var_dump(isset($array[acos(3)]));
   
   // Idem pour INF, which is infinity 
   var_dump($array = [INF => 3]);
   var_dump(isset($array[INF]));


PHP does not compare ``NAN`` values: it always fails, even if the source is the same.

Depending on the context, ``NAN`` becomes the string ``'NAN'``, or the integer ``0``.

Since PHP 8.1, the engine emits a warning to signal it: this is good, and helps spotting such mistakes.

And, in the end, no one uses ``NAN`` anyway.

See Also
________

* `Is Not A NAN <https://php-tips.readthedocs.io/en/latest/tips/is_not_a_nan.html>`_
* `nan !== nan <https://3v4l.org/N6AoL>`_ [Try me]


PHP Features
____________

* `nan <https://php-dictionary.readthedocs.io/en/latest/dictionary/nan.ini.html>`_

* `inf <https://php-dictionary.readthedocs.io/en/latest/dictionary/inf.ini.html>`_

* `comparison <https://php-dictionary.readthedocs.io/en/latest/dictionary/comparison.ini.html>`_



Last updated: 14 July 2026