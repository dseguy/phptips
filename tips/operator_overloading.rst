.. _operator-overloading:

Operator Overloading
--------------------

.. meta::
	:description:
		Operator Overloading: PHP has no operator overloading in the userland, but it may be achieved by using an extension.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Operator Overloading
	:twitter:description: Operator Overloading: PHP has no operator overloading in the userland, but it may be achieved by using an extension
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/operator_overloading.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/operator_overloading.png
	:og:title: Operator Overloading
	:og:type: article
	:og:description: PHP has no operator overloading in the userland, but it may be achieved by using an extension
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/operator_overloading.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/operator_overloading.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/operator_overloading.html","name":"Operator Overloading","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:44:19+00:00","dateModified":"2026-07-14T14:44:19+00:00","description":"PHP has no operator overloading in the userland, but it may be achieved by using an extension","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/operator_overloading.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php 
   
   use BcMath\Number;
   
   $a = new Number('1.005691112');
   $b = new Number('2.567891112');
   
   $result = $a * $b; 
   
   echo $result->round(2);
   echo PHP_EOL;
   echo $result;
   echo PHP_EOL;
   echo 1.005691112 * 2.567891112;
   echo PHP_EOL;
   echo 'precision is '.ini_get('precision');


PHP has no operator overloading in the userland, but it may be achieved by using an extension.

Bcmath has taken advantage of it since PHP 8.3, where it introduced the ``Number`` class.

With feature, it is possible to go beyond the 14 decimal digits of standard PHP configuration.

On the other hand, the underlying library's limitation are also applied, so using the ``**`` operator on decimal ``Number`` yield a ``exponent cannot have a fractional part``, which does not appear in the standard PHP operation.

See Also
________

* `Overloading Multiplication <https://3v4l.org/jCCU2#v>`_ [Try me]
* `Overloading Exponent <https://3v4l.org/9i85S#v>`_ [Try me]


PHP Error Messages
__________________

* `exponent cannot have a fractional part <https://php-errors.readthedocs.io/en/latest/messages/exponent-cannot-have-a-fractional-part.html>`_



PHP Features
____________

* `bcmath <https://php-dictionary.readthedocs.io/en/latest/dictionary/bcmath.ini.html>`_

* `multiplication <https://php-dictionary.readthedocs.io/en/latest/dictionary/multiplication.ini.html>`_

* `exponent <https://php-dictionary.readthedocs.io/en/latest/dictionary/exponent.ini.html>`_



Last updated: 14 July 2026