.. _of-integers-and-floats:

Of Integers And Floats
----------------------

.. meta::
	:description:
		Of Integers And Floats: First thing to unpack in this post: PHP accepts any number of decimals when it is hardcoded in the source.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Of Integers And Floats
	:twitter:description: Of Integers And Floats: First thing to unpack in this post: PHP accepts any number of decimals when it is hardcoded in the source
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/int_and_float.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/int_and_float.png
	:og:title: Of Integers And Floats
	:og:type: article
	:og:description: First thing to unpack in this post: PHP accepts any number of decimals when it is hardcoded in the source
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/int_and_float.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/int_and_float.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/int_and_float.html","name":"Of Integers And Floats","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:32:01 +0000","dateModified":"Tue, 14 Jul 2026 14:32:01 +0000","description":"First thing to unpack in this post: PHP accepts any number of decimals when it is hardcoded in the source","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/int_and_float.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
     $one = 3 * 0.333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333;
   
       var_dump($one); // float(1)
       var_dump(1 === $one);
       
       $float = 1 / 3 * 3; 
       var_dump( $float );
       $int = 3 / 3; 
       var_dump( $int );
       
       print ini_get('precision').PHP_EOL;
       //   14 three   --------------
       $notOne = 3 * 0.33333333333333;
       print $notOne;
   
   ?>


First thing to unpack in this post: PHP accepts any number of decimals when it is hardcoded in the source. It will stop at 14, which is the ``precision`` level in the php.ini file. The rest is ignored, so it may be as long as you want, it does not matter, except for the time to read the file.

Then, such a number ends up being a decimal. It means that when multiplied by its inverse, it might end up as ``1``, but it is still a float, so thre is not way to compare it to the integer 1, nor to any other decimal 1, as there might be some tiny difference.

Finally, the other of division is important: when the intermediate result is a decimal, the final result is also a decimal. But when PHP can keep the division within the integer values, like `` 3 / 3`` or ``6 / 3``, then the final result is also an integer.

See Also
________

* `Integers and Floats <https://3v4l.org/2b5ZR#v8.5.6>`_ [Try me]


PHP Features
____________

* `integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/integer.ini.html>`_

* `float <https://php-dictionary.readthedocs.io/en/latest/dictionary/float.ini.html>`_

* `division <https://php-dictionary.readthedocs.io/en/latest/dictionary/division.ini.html>`_

* `precision <https://php-dictionary.readthedocs.io/en/latest/dictionary/precision.ini.html>`_


