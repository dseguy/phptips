.. _catch-on-interfaces:

Catch On Interfaces
-------------------

.. meta::
	:description:
		Catch On Interfaces: Exceptions can be caught using their interfaces rather than their specific class names or parent classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Catch On Interfaces
	:twitter:description: Catch On Interfaces: Exceptions can be caught using their interfaces rather than their specific class names or parent classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/catch_interfaces.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/catch_interfaces.png
	:og:title: Catch On Interfaces
	:og:type: article
	:og:description: Exceptions can be caught using their interfaces rather than their specific class names or parent classes
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/catch_interfaces.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/catch_interfaces.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/catch_interfaces.html","name":"Catch On Interfaces","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:53:14+00:00","dateModified":"2026-07-14T14:53:14+00:00","description":"Exceptions can be caught using their interfaces rather than their specific class names or parent classes","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/catch_interfaces.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   interface i {}
   
   class x extends \Exception implements i {}
   
   try {
       throw new x();
   } catch (i $x) {
       print "Caught!";
   }


Exceptions can be caught using their interfaces rather than their specific class names or parent classes. This introduces polymorphism to exception handling, allowing the same exception to be caught in multiple ways. By targeting interfaces, developers gain flexibility in managing errors, especially when different exception types share common behavior defined by a shared interface.

See Also
________

* `Exceptions (PHP manual) <https://www.php.net/manual/en/language.exceptions.php>`_
* `Catching an interface <https://3v4l.org/JfE8M>`_ [Try me]


PHP Features
____________

* `interface <https://php-dictionary.readthedocs.io/en/latest/dictionary/interface.ini.html>`_

* `try-catch <https://php-dictionary.readthedocs.io/en/latest/dictionary/try-catch.ini.html>`_

* `exception <https://php-dictionary.readthedocs.io/en/latest/dictionary/exception.ini.html>`_



Last updated: 14 July 2026