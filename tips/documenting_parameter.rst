.. _documenting-parameters:

Documenting Parameters
----------------------

.. meta::
	:description:
		Documenting Parameters: Sometimes, even a literal value used as parameter is not readable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Documenting Parameters
	:twitter:description: Documenting Parameters: Sometimes, even a literal value used as parameter is not readable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/documenting_parameter.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/documenting_parameter.png
	:og:title: Documenting Parameters
	:og:type: article
	:og:description: Sometimes, even a literal value used as parameter is not readable
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/documenting_parameter.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/documenting_parameter.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/documenting_parameter.html","name":"Documenting Parameters","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:23+00:00","dateModified":"2026-07-14T14:31:23+00:00","description":"Sometimes, even a literal value used as parameter is not readable","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/documenting_parameter.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   // what does 1 and true mean here?
   $keys = array_keys($array, 1, true);
   
   // yes but of course
   $keys = array_keys($array, filter_value:1, strict:true);
   
   ?>


Sometimes, even a literal value used as parameter is not readable. An easy way to document the literal values is to provide the name of the parameter. Since the parameters need a smart name to be used in the method, using it in the method call provides more context to the parameter.

Another option is to make that literal value a constant, and use that constant to provide a readable name.

See Also
________

* `Named Arguments (PHP manual) <https://www.php.net/manual/en/functions.arguments.php#functions.named-arguments>`_
* `documenting parameters <https://3v4l.org/Qr4tP>`_ [Try me]


PHP Features
____________

* `named-parameter <https://php-dictionary.readthedocs.io/en/latest/dictionary/named-parameter.ini.html>`_

* `readability <https://php-dictionary.readthedocs.io/en/latest/dictionary/readability.ini.html>`_



Last updated: 14 July 2026