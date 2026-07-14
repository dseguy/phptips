.. _non-empty-match:

Non Empty Match
---------------

.. meta::
	:description:
		Non Empty Match: PHP allows the empty ``switch``: that is, a switch command with an empty block of cases.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non Empty Match
	:twitter:description: Non Empty Match: PHP allows the empty ``switch``: that is, a switch command with an empty block of cases
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/non-empty-match.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/non-empty-match.png
	:og:title: Non Empty Match
	:og:type: article
	:og:description: PHP allows the empty ``switch``: that is, a switch command with an empty block of cases
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/non-empty-match.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-empty-match.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-empty-match.html","name":"Non Empty Match","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:32:46 +0000","dateModified":"Tue, 14 Jul 2026 14:32:46 +0000","description":"PHP allows the empty ``switch``: that is, a switch command with an empty block of cases","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-empty-match.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   switch ($a) {}
   
   match($b) {};
   
   ?>


PHP allows the empty ``switch``: that is, a switch command with an empty block of cases. The whole expression does nothing, and it is as useless as an if statement with an empty block.

The ``match`` statement, on the other hand, compiles just like the ``switch`` but it also enforces the default case, with an ``Uncaught UnhandledMatchError: Unhandled match case NULL`` exception. This one must be caught, or one must add a ``default`` case, with a value, to the ``match`` to keep it useless.

See Also
________

* `switch (PHP manual) <https://www.php.net/manual/en/control-structures.match.php>`_
* `match (PHP manual) <https://www.php.net/manual/en/control-structures.switch.php>`_
* `unhandled case with NULL <https://3v4l.org/OHMUb>`_ [Try me]


PHP Error Messages
__________________

* `Unhandled case NULL <https://php-errors.readthedocs.io/en/latest/messages/unhandled-match-case-%25s.html>`_



PHP Features
____________

* `switch <https://php-dictionary.readthedocs.io/en/latest/dictionary/switch.ini.html>`_

* `match <https://php-dictionary.readthedocs.io/en/latest/dictionary/match.ini.html>`_


