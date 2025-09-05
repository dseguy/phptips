.. _abstract-constants:

Abstract Constants
------------------

.. meta::
	:description:
		Abstract Constants: There's a pretty common pattern to declare "abstract class constants" in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Abstract Constants
	:twitter:description: Abstract Constants: There's a pretty common pattern to declare "abstract class constants" in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/abstract_constant.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/abstract_constant.png
	:og:title: Abstract Constants
	:og:type: article
	:og:description: There's a pretty common pattern to declare "abstract class constants" in PHP
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/abstract_constant.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/abstract_constant.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/abstract_constant.html","name":"Abstract Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 04 Aug 2025 18:18:54 +0000","dateModified":"Mon, 04 Aug 2025 18:18:54 +0000","description":"There's a pretty common pattern to declare \"abstract class constants\" in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/abstract_constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `WebSmithery <https://stackoverflow.com/users/2519523/websmithery>`_

There's a pretty common pattern to declare "abstract class constants" in PHP.



PHP lazy loading will prevent the error "Fatal error: Uncaught Error: Cannot declare self-referencing constant self::NAME" if the constant is overloaded. 



This makes an effective 'abstract constant', that must be defined to be usable.

.. image:: ../images/abstract_constant.png

See Also
________

* `Class Constants (PHP manual) <https://www.php.net/manual/en/language.oop5.constants.php>`_
* `Class Abstraction (PHP manual) <https://www.php.net/manual/en/language.oop5.abstract.php>`_
* `Abstract constants in PHP - Force a child class to define a constant <https://stackoverflow.com/questions/10368620/abstract-constants-in-php-force-a-child-class-to-define-a-constant>`_
* `Abstract Class Constant on 3v4l.org <https://3v4l.org/uu0lU>`_ [Try me]


PHP Features
____________

* `abstract <https://php-dictionary.readthedocs.io/en/latest/dictionary/abstract.ini.html>`_

* `class-constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/class-constant.ini.html>`_


