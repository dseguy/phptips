.. _oversigned-integers:

Oversigned Integers
-------------------

.. meta::
	:description:
		Oversigned Integers: PHP has signed integers.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Oversigned Integers
	:twitter:description: Oversigned Integers: PHP has signed integers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/signed_integer.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/signed_integer.png
	:og:title: Oversigned Integers
	:og:type: article
	:og:description: PHP has signed integers
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/signed_integer.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/signed_integer.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/signed_integer.html","name":"Oversigned Integers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:25 +0000","dateModified":"Tue, 14 Jul 2026 14:33:25 +0000","description":"PHP has signed integers","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/signed_integer.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $three = +-+3; // -3
   $three = -+-3; //  3
   
   $four  = -+-+4; // 4
   $four  = -+-+4; // 4
   
   var_dump(+0 === -0);
   
   var_dump((int) '+-+3');
   
   var_dump(is_numeric('+-+3'));


PHP has signed integers. They may be positive or negative, with ``+`` or ``-``.

At parsing time, integers and their sign are separate entities. This means that ``-`` and ``3`` are process in two steps, and PHP allows the chaining of the sign operators. This means that ``+`` and ``-`` may be added as much as we want, in front of integers, as long as they alternate.

Note that is_numeric() is not fooled by the trick, and returns false on such strings, while the cast operator ``(int)`` turns the string into 0, as if there was an error.

Finally, there is one integer which is equal to itself when positive or negative: zero.

See Also
________

* `Over-signed integers <https://3v4l.org/HU2ub#v8.5.3>`_ [Try me]


PHP Error Messages
__________________

* `Unsupported operand types: string + int <https://php-errors.readthedocs.io/en/latest/messages/unsupported-operand-types%3A-%25s-%25s-%25s.html>`_



PHP Features
____________

* `integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/integer.ini.html>`_

* `sign <https://php-dictionary.readthedocs.io/en/latest/dictionary/sign.ini.html>`_

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_


