.. _hexadecimal-separator:

Hexadecimal Separator
---------------------

.. meta::
	:description:
		Hexadecimal Separator: PHP offers a number separator since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hexadecimal Separator
	:twitter:description: Hexadecimal Separator: PHP offers a number separator since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/hexadecimal_separator.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/hexadecimal_separator.png
	:og:title: Hexadecimal Separator
	:og:type: article
	:og:description: PHP offers a number separator since PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/hexadecimal_separator.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/hexadecimal_separator.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/hexadecimal_separator.html","name":"Hexadecimal Separator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:34:51 +0000","dateModified":"Tue, 14 Jul 2026 14:34:51 +0000","description":"PHP offers a number separator since PHP 8","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/hexadecimal_separator.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   echo 123_456;
   echo 12.45_56;
   echo 0x12_34;
   echo 0b111_110_001;
   echo 0b111_110_00_1;
   
   echo mb_chr(0x1F_418); // OK
   echo "\u{1F4_18}";   // KO
   
   ?>


PHP offers a number separator since PHP 8.0: ``_``. It may be added inside any integer or float, to make long list of digits more readable.

In fact, this also applies to the other integer notations: hexadecimal, octal, binary, etc. Just don't put it inside the header, like ``0_x_1``, but in the body of the integer.

Interestingly, the separator does not work in string sequences, like inside an hexadecimal unicode representation.

See Also
________

* `Hexadecimal separated <https://3v4l.org/AQRE2>`_ [Try me]


PHP Error Messages
__________________

* `Invalid UTF-8 codepoint escape <https://php-errors.readthedocs.io/en/latest/messages/invalid-utf-8-codepoint-escape.html>`_



PHP Features
____________

* `numeric-separator <https://php-dictionary.readthedocs.io/en/latest/dictionary/numeric-separator.ini.html>`_

* `underscore <https://php-dictionary.readthedocs.io/en/latest/dictionary/underscore.ini.html>`_

* `hexadecimal-integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/hexadecimal-integer.ini.html>`_

* `octal-integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/octal-integer.ini.html>`_

* `binary-integer <https://php-dictionary.readthedocs.io/en/latest/dictionary/binary-integer.ini.html>`_

* `unicode <https://php-dictionary.readthedocs.io/en/latest/dictionary/unicode.ini.html>`_

* `escape-sequence <https://php-dictionary.readthedocs.io/en/latest/dictionary/escape-sequence.ini.html>`_


