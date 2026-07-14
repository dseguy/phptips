.. _compatible-only-interface:

Compatible Only Interface
-------------------------

.. meta::
	:description:
		Compatible Only Interface: Interfaces are contracts that defines methods signatures, which the derived classes have to implements.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Compatible Only Interface
	:twitter:description: Compatible Only Interface: Interfaces are contracts that defines methods signatures, which the derived classes have to implements
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/compatible_interface.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/compatible_interface.png
	:og:title: Compatible Only Interface
	:og:type: article
	:og:description: Interfaces are contracts that defines methods signatures, which the derived classes have to implements
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/compatible_interface.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/compatible_interface.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/compatible_interface.html","name":"Compatible Only Interface","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:16+00:00","dateModified":"2026-07-14T14:31:16+00:00","description":"Interfaces are contracts that defines methods signatures, which the derived classes have to implements","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/compatible_interface.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class A {}
   class B {}
   
   interface i { 
       function foo(A $a) : A ;
   }
   
   class C implements i {
       function foo(A|B $a) : A&B {}
   }


Interfaces are contracts that defines methods signatures, which the derived classes have to implements.

One lesser known fact is that the implementation only has to be compatible with the interface, there is no need to be identical. It is the same behavior than with class inheritance.

This explains that the following code is valid, both with argument contra-variance and return type variance.

Note that the names of the parameters are completely free to be changed at will, yet it is not recommended.

See Also
________

* `Object Interfaces (PHP manual) <https://www.php.net/manual/en/language.oop5.interfaces.php>`_
* `Extended interface <https://3v4l.org/u9kQ3>`_ [Try me]


PHP Features
____________

* `compatibility <https://php-dictionary.readthedocs.io/en/latest/dictionary/compatibility.ini.html>`_

* `type-covariance <https://php-dictionary.readthedocs.io/en/latest/dictionary/type-covariance.ini.html>`_

* `type-contravariance <https://php-dictionary.readthedocs.io/en/latest/dictionary/type-contravariance.ini.html>`_



Last updated: 14 July 2026