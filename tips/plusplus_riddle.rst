.. _-riddle:

++ Riddle
---------

.. meta::
	:description:
		++ Riddle: PHP has no operator ``++-++``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ++ Riddle
	:twitter:description: ++ Riddle: PHP has no operator ``++-++``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/plusplus_riddle.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/plusplus_riddle.png
	:og:title: ++ Riddle
	:og:type: article
	:og:description: PHP has no operator ``++-++``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/plusplus_riddle.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/plusplus_riddle.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/plusplus_riddle.html","name":"++ Riddle","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:00 +0000","dateModified":"Tue, 14 Jul 2026 14:33:00 +0000","description":"PHP has no operator ``++-++``","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/plusplus_riddle.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $a = 5;
   $b = $a++-++$a;
   
   echo $b; // -2
   echo $a; // 7
   
   // This, sadly, doesn't compile 
   //$b = $a+++++$a;
   
   $a = 5;
   $b = $a++ + ++$a; // 12
   echo $b; // 12
   echo $a; // 7


PHP has no operator ``++-++``. This has to be read with spaces, as ``++ - ++``: there is one post increment operator, a substraction then a pre-increment operator.

In this case, the first operator increment ``$a`` from 5 to 6, but returns the original 5. The next operator is the substraction, which works on the result of the pre-increment operator: this one turns the 6 to 7. The result is then -2.

PHP cannot compile ``+++++``, as it confuses addition and increment operators. Adding spaces makes the code valid, and the same order of operation applies as above, leading to 12.

The original post dates from 2011, and was tested in different languages: the result may surprise you. At least, PHP has been consisten with this since then.

See Also
________

* `(original) int a = 5; a = a++ + ++a; a = ? <https://gynvael.coldwind.pl/?id=372>`_
* `Lots of + <https://3v4l.org/lrZe3#v8.5.3>`_ [Try me]


PHP Features
____________

* `post-increment <https://php-dictionary.readthedocs.io/en/latest/dictionary/post-increment.ini.html>`_

* `pre-increment <https://php-dictionary.readthedocs.io/en/latest/dictionary/pre-increment.ini.html>`_

* `addition <https://php-dictionary.readthedocs.io/en/latest/dictionary/addition.ini.html>`_


