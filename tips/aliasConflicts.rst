.. _alias-conflicts:

Alias Conflicts
---------------

.. meta::
	:description:
		Alias Conflicts: When the class is defined before the alias, the alias fails as the class already uses the name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Alias Conflicts
	:twitter:description: Alias Conflicts: When the class is defined before the alias, the alias fails as the class already uses the name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/aliasConflicts.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/aliasConflicts.png
	:og:title: Alias Conflicts
	:og:type: article
	:og:description: When the class is defined before the alias, the alias fails as the class already uses the name
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/aliasConflicts.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/aliasConflicts.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/aliasConflicts.html","name":"Alias Conflicts","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:30:29+00:00","dateModified":"2026-07-14T14:30:29+00:00","description":"When the class is defined before the alias, the alias fails as the class already uses the name","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/aliasConflicts.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   namespace A {
   
   //        class xBefore {}
   }
   
   namespace A {
       use y as xAfter;
       use y as xBefore;
       class y {}
   }
   
   
   namespace A {
           class xAfter {}
   }


When the class is defined before the alias, the alias fails as the class already uses the name. When the class is defined after the alias, the class fails, although only if the class is in the same physical namespace block as the use.

This illustration is good to show and tell, but in real life, it never happens. On the contrary, the classes and uses are in different files, and the order of loading is controller by code execution, via autoloading.

This means that reusing a namespace's class name as an alias is prone to random failures, depending on the inclusions.

As a side note, the use command does not need the definition of the original, until actual usage.

See Also
________

* `Possible name conflicts <https://3v4l.org/A6YOX>`_ [Try me]


PHP Features
____________

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `namespace <https://php-dictionary.readthedocs.io/en/latest/dictionary/namespace.ini.html>`_

* `use <https://php-dictionary.readthedocs.io/en/latest/dictionary/use.ini.html>`_

* `alias <https://php-dictionary.readthedocs.io/en/latest/dictionary/alias.ini.html>`_



Last updated: 14 July 2026