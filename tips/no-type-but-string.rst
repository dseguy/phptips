.. _no-returntype-but-still-only-string:

No Returntype But Still, Only String
------------------------------------

.. meta::
	:description:
		No Returntype But Still, Only String: Without a return type (or mixed), a method may return any type of data.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No Returntype But Still, Only String
	:twitter:description: No Returntype But Still, Only String: Without a return type (or mixed), a method may return any type of data
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/no-type-but-string.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/no-type-but-string.png
	:og:title: No Returntype But Still, Only String
	:og:type: article
	:og:description: Without a return type (or mixed), a method may return any type of data
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/no-type-but-string.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no-type-but-string.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no-type-but-string.html","name":"No Returntype But Still, Only String","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:32:36+00:00","dateModified":"2026-07-14T14:32:36+00:00","description":"Without a return type (or mixed), a method may return any type of data","inLanguage":"en-US","author":{"@id":"https:\/\/bsky.app\/profile\/bouchery.fr"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no-type-but-string.html"]}]},{"@type":"Person","@id":"https:\/\/bsky.app\/profile\/bouchery.fr","name":"Frederic Bouchery","url":"https:\/\/bsky.app\/profile\/bouchery.fr","sameAs":["https:\/\/bsky.app\/profile\/bouchery.fr"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Frederic Bouchery <https://bsky.app/profile/bouchery.fr>`_

.. code-block:: php

   <?php
   
   declare(strict_types=1);
   
   class x {
       function __toString() {
           return 1;
       }
   }
   
   echo new x;


Without a return type (or mixed), a method may return any type of data. This is not the case for the magic method ``__toString``, as it really should return a string. So, even without a return type, it complains about the type.

That trick requires ``strict_types`` though.

See Also
________

* `Magic methods (PHP manual) <https://www.php.net/manual/en/language.oop5.magic.php>`_
* `Declare <https://www.php.net/manual/en/control-structures.declare.php>`_
* `must return string <https://3v4l.org/cDaOL>`_ [Try me]


PHP Features
____________

* `strict_types <https://php-dictionary.readthedocs.io/en/latest/dictionary/strict_types.ini.html>`_

* `magic-method <https://php-dictionary.readthedocs.io/en/latest/dictionary/magic-method.ini.html>`_

* `__tostring <https://php-dictionary.readthedocs.io/en/latest/dictionary/__tostring.ini.html>`_



Last updated: 14 July 2026