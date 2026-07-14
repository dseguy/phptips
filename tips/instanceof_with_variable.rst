.. _instanceof-with-variables:

instanceof With Variables
-------------------------

.. meta::
	:description:
		instanceof With Variables: It is possible to compare the type of two objects with ``instanceof``: PHP uses the class of the second operand, or the name of the class passed as a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: instanceof With Variables
	:twitter:description: instanceof With Variables: It is possible to compare the type of two objects with ``instanceof``: PHP uses the class of the second operand, or the name of the class passed as a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/instanceof_with_variable.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/instanceof_with_variable.png
	:og:title: instanceof With Variables
	:og:type: article
	:og:description: It is possible to compare the type of two objects with ``instanceof``: PHP uses the class of the second operand, or the name of the class passed as a string
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/instanceof_with_variable.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instanceof_with_variable.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instanceof_with_variable.html","name":"instanceof With Variables","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:59+00:00","dateModified":"2026-07-14T14:31:59+00:00","description":"It is possible to compare the type of two objects with ``instanceof``: PHP uses the class of the second operand, or the name of the class passed as a string","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instanceof_with_variable.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   $a = (object) ['b' => 1];
   $b = new stdClass();
   
   var_dump($a instanceof $b);
   // true
   
   ?>


It is possible to compare the type of two objects with ``instanceof``: PHP uses the class of the second operand, or the name of the class passed as a string.

Here, note that the cast operator ``(object)`` creates ``stdClass`` when applied to array.

See Also
________

* `Type operators (PHP manual) <https://www.php.net/manual/en/language.operators.type.php>`_
* `instanceof With Variables <https://3v4l.org/UCoEf>`_ [Try me]


PHP Features
____________

* `instanceof <https://php-dictionary.readthedocs.io/en/latest/dictionary/instanceof.ini.html>`_

* `stdclass <https://php-dictionary.readthedocs.io/en/latest/dictionary/stdclass.ini.html>`_

* `cast <https://php-dictionary.readthedocs.io/en/latest/dictionary/cast.ini.html>`_



Last updated: 14 July 2026