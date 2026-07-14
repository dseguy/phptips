.. _preg_split-magic:

preg_split() Magic
------------------

.. meta::
	:description:
		preg_split() Magic: Most of the time, explode() is sufficient to split a string with a static separator.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: preg_split() Magic
	:twitter:description: preg_split() Magic: Most of the time, explode() is sufficient to split a string with a static separator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/preg_split.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/preg_split.png
	:og:title: preg_split() Magic
	:og:type: article
	:og:description: Most of the time, explode() is sufficient to split a string with a static separator
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/preg_split.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/preg_split.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/preg_split.html","name":"preg_split() Magic","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:34:58+00:00","dateModified":"2026-07-14T14:34:58+00:00","description":"Most of the time, explode() is sufficient to split a string with a static separator","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/preg_split.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $sentence = 'hypertext language, programming';
   
   $keywords = preg_split('/[\s,]+/', $sentence);
   // ['hypertext', 'language', 'programming']
   
   $separators = preg_split('/([\s,]+)/', $sentence, flags: PREG_SPLIT_DELIM_CAPTURE);
   // ['hypertext', ' ', 'language', ', ', 'programming']
   
   $separator2s = preg_split('/([\s,])([\s]*)/', $sentence, flags: PREG_SPLIT_DELIM_CAPTURE);
   // ['hypertext', ' ', '', 'language', ',', ' ', 'programming']
   
   $words = explode(' ', $sentence);
   // ['hypertext', 'language,', 'programming']
   // comma is still collected
   
   ?>


Most of the time, explode() is sufficient to split a string with a static separator. Otherwise, there is preg_split().

preg_split() uses a regex to split the string. This allows for multiple and complex separators to be used in the same call.

preg_split() accepts empty regex, to split strings with nothing: it turns a string into an array. It might require the PREG_SPLIT_NO_EMPTY option, to avoid trailing elements.

preg_split() has a PREG_SPLIT_DELIM_CAPTURE option, to collect the separators along the parsing. Since it might be complex, it is important to get them for further processing.

preg_split(), just like explode(), has a limit parameter, to stop processing the string, once a number of string has been found. This is perfect to prevent PHP from processing too much, as long as a number of expected strings can be predicted.

``explode()`` is faster ``preg_split()``, so use it for the simple and most common cases.

See Also
________

* `preg_split (PHP manual) <https://www.php.net/manual/en/function.preg-split.php>`_
* `explode (PHP manual) <https://www.php.net/manual/en/function.explode.php>`_
* `strtok (PHP manual) <https://www.php.net/manual/en/function.strtok.php>`_
* `preg_split magic <https://3v4l.org/32S4H>`_ [Try me]


PHP Error Messages
__________________

* `Argument #1 must not be empty <https://php-errors.readthedocs.io/en/latest/messages/must-not-be-empty.html>`_



PHP Features
____________

* `preg_split <https://php-dictionary.readthedocs.io/en/latest/dictionary/preg_split.ini.html>`_

* `explode <https://php-dictionary.readthedocs.io/en/latest/dictionary/explode.ini.html>`_

* `regex <https://php-dictionary.readthedocs.io/en/latest/dictionary/regex.ini.html>`_



Last updated: 14 July 2026