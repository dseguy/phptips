.. _silent-type-cast:

Silent Type Cast
----------------

.. meta::
	:description:
		Silent Type Cast: An integer is a float, but the opposite is not always true.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Silent Type Cast
	:twitter:description: Silent Type Cast: An integer is a float, but the opposite is not always true
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/silent_type_cast.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/silent_type_cast.png
	:og:title: Silent Type Cast
	:og:type: article
	:og:description: An integer is a float, but the opposite is not always true
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/silent_type_cast.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/silent_type_cast.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/silent_type_cast.html","name":"Silent Type Cast","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:27 +0000","dateModified":"Tue, 14 Jul 2026 14:33:27 +0000","description":"An integer is a float, but the opposite is not always true","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/silent_type_cast.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   //declare(strict_types=1);
   
   function foo(float $x): int {
       var_dump($x);
       
       return $x;
   }
   
   var_dump(foo(1));
   //var_dump(foo(1.1));


An integer is a float, but the opposite is not always true. For PHP, pushing an integer in a function that types ``float`` its argument, makes that integer an float. The reverse conversion from float to integer is also possible, at return time. This happens when strict_types is not activated, and when the float has no decimal part, as is the case here.

Otherwise, it is a Type error, or an warning about loss of precision.

See Also
________

* `Integers to floats, and back <https://3v4l.org/F6jts#v8.5.6>`_ [Try me]


PHP Error Messages
__________________

* `Return value must be of type int, float returned <https://php-errors.readthedocs.io/en/latest/messages/return-value-of-%25s%25s%25s%28%29-must-%25s%25s%25s%2C-%25s%25s-returned.html>`_

* `Implicit conversion from float 1.1 to int loses precision <https://php-errors.readthedocs.io/en/latest/messages/implicit-conversion-from-float-%25.%2Ah-to-int-loses-precision.html>`_



PHP Features
____________

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_

* `type-juggling <https://php-dictionary.readthedocs.io/en/latest/dictionary/type-juggling.ini.html>`_

* `implicit <https://php-dictionary.readthedocs.io/en/latest/dictionary/implicit.ini.html>`_

* `null <https://php-dictionary.readthedocs.io/en/latest/dictionary/null.ini.html>`_

* `integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/integer.ini.html>`_

* `silent <https://php-dictionary.readthedocs.io/en/latest/dictionary/silent.ini.html>`_


