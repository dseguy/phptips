.. _cast-is-so-strong:

Cast Is So Strong
-----------------

.. meta::
	:description:
		Cast Is So Strong: The code below yields a Fatal Error, at linting time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cast Is So Strong
	:twitter:description: Cast Is So Strong: The code below yields a Fatal Error, at linting time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/cast_is_strong.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/cast_is_strong.png
	:og:title: Cast Is So Strong
	:og:type: article
	:og:description: The code below yields a Fatal Error, at linting time
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/cast_is_strong.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_is_strong.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_is_strong.html","name":"Cast Is So Strong","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:30:56+00:00","dateModified":"2026-07-14T14:30:56+00:00","description":"The code below yields a Fatal Error, at linting time","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cast_is_strong.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   const int = 3;
   var_dump(int);
   
   ?>


The code below yields a Fatal Error, at linting time. PHP identifies too early the cast operator ``(int)``, and fail to recognize the function call to ``var_dump()``.

It is possible to create a constant called ``int``, but it is not possible to put it between parenthesis, including with spaces. PHP always confuse it with the cast operator.

Later, ``bool``, ``float``, ``string``, ``array``, ``object`` all fail to parse for the same reasons. It is also the case for ``unset``, although this operator is not supported anymore. It is also the case for ``boolean``, and ``integer``, although PHP complains about the short name of the operator.

This issue has been with PHP since PHP 4.

See Also
________

* `Type Juggling <https://www.php.net/manual/en/language.types.type-juggling.php>`_
* `Example cast with int <https://3v4l.org/moVUK>`_ [Try me]


PHP Error Messages
__________________

* `syntax error, unexpected token "(int)" <https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%28int%29%22.html>`_



PHP Features
____________

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_

* `linting <https://php-dictionary.readthedocs.io/en/latest/dictionary/linting.ini.html>`_



Last updated: 14 July 2026