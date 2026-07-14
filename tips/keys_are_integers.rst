.. _keys-are-integers-whenever-possible:

Keys Are Integers Whenever Possible
-----------------------------------

.. meta::
	:description:
		Keys Are Integers Whenever Possible: Array keys are only strings or integers: the later has priority.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Keys Are Integers Whenever Possible
	:twitter:description: Keys Are Integers Whenever Possible: Array keys are only strings or integers: the later has priority
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/keys_are_integers.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/keys_are_integers.png
	:og:title: Keys Are Integers Whenever Possible
	:og:type: article
	:og:description: Array keys are only strings or integers: the later has priority
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/keys_are_integers.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/keys_are_integers.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/keys_are_integers.html","name":"Keys Are Integers Whenever Possible","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:12+00:00","dateModified":"2026-07-14T14:32:12+00:00","description":"Array keys are only strings or integers: the later has priority","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/keys_are_integers.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $array = [];
   $array["01000"] = "Bourg-en-Bresse";
   $array["75001"] = "Paris";
   
   var_dump($array);


Array keys are only strings or integers: the later has priority. So, when storing a string that can be converted to an integer, PHP does the conversion automatically.

In the case displayed, the keys are French zip codes, which might start with a leading ``0``. But PHP converts it into integer, and drops that leading ``0``. The value is still correctly indexed, but now, the string representation has changed.

See Also
________

* `Array: syntax (PHP manual) <https://www.php.net/manual/en/language.types.array.php>`_
* `integer or string? <https://3v4l.org/Xlp2g>`_ [Try me]


PHP Features
____________

* `array <https://php-dictionary.readthedocs.io/en/latest/dictionary/array.ini.html>`_

* `index-array <https://php-dictionary.readthedocs.io/en/latest/dictionary/index-array.ini.html>`_

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_

* `type-juggling <https://php-dictionary.readthedocs.io/en/latest/dictionary/type-juggling.ini.html>`_



Last updated: 14 July 2026