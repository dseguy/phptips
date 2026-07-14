.. _variable-creation:

Variable Creation
-----------------

.. meta::
	:description:
		Variable Creation: When defining a closure, the lexical variables (in the ``use`` clause) are created immediately, with the default value of ``null``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variable Creation
	:twitter:description: Variable Creation: When defining a closure, the lexical variables (in the ``use`` clause) are created immediately, with the default value of ``null``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/variable_creation.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/variable_creation.png
	:og:title: Variable Creation
	:og:type: article
	:og:description: When defining a closure, the lexical variables (in the ``use`` clause) are created immediately, with the default value of ``null``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/variable_creation.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/variable_creation.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/variable_creation.html","name":"Variable Creation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:55 +0000","dateModified":"Tue, 14 Jul 2026 14:33:55 +0000","description":"When defining a closure, the lexical variables (in the ``use`` clause) are created immediately, with the default value of ``null``","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/variable_creation.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $f = function () use (&$a) { $a = [1]; };
   var_dump($a);
   
   $x = new class ($c) { function __construct(&$d) { $d = []; } };
   var_dump($c);


When defining a closure, the lexical variables (in the ``use`` clause) are created immediately, with the default value of ``null``. The closure is executed later, and then, the values of the lexical variables are changed.

When creating an anonymous object, the constructor is immediately executed: hence, the argument with reference is created, then initialized with ``[]`` and immediately available.

See Also
________

* `Create variables with a closure <https://3v4l.org/Z5jgo>`_ [Try me]


PHP Features
____________

* `variable <https://php-dictionary.readthedocs.io/en/latest/dictionary/variable.ini.html>`_

* `closure <https://php-dictionary.readthedocs.io/en/latest/dictionary/closure.ini.html>`_


