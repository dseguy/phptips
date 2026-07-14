.. _returntypewillchange-is-for-all:

``ReturnTypeWillChange`` Is For All
-----------------------------------

.. meta::
	:description:
		ReturnTypeWillChange Is For All: ``ReturnTypeWillChange`` is an attribute that tells PHP that the return type of the related method is different from the defined by the PHP native methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ReturnTypeWillChange Is For All
	:twitter:description: ``ReturnTypeWillChange`` Is For All: ``ReturnTypeWillChange`` is an attribute that tells PHP that the return type of the related method is different from the defined by the PHP native methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/returntypewillchange_for_all.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/returntypewillchange_for_all.png
	:og:title: ReturnTypeWillChange Is For All
	:og:type: article
	:og:description: ``ReturnTypeWillChange`` is an attribute that tells PHP that the return type of the related method is different from the defined by the PHP native methods
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/returntypewillchange_for_all.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/returntypewillchange_for_all.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/returntypewillchange_for_all.html","name":"ReturnTypeWillChange Is For All","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:18+00:00","dateModified":"2026-07-14T14:33:18+00:00","description":"``ReturnTypeWillChange`` is an attribute that tells PHP that the return type of the related method is different from the defined by the PHP native methods","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/returntypewillchange_for_all.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   interface i {
       function foo(): int;
   }
   
   class x implements i {
       #[Returntypewillchange]
       function foo() : int { return 'abc'; }
   }


``ReturnTypeWillChange`` is an attribute that tells PHP that the return type of the related method is different from the defined by the PHP native methods. In fact, this attribute may also be used on custom interfaces, to skip the type checks.

The method signature must be compatible with the interface definition, but, with the attribute, it may actually return anything else. This also means that types may only be trusted after checking for attributes.

See Also
________

* `ReturnTypeWillChange (PHP manual) <https://www.php.net/manual/en/class.returntypewillchange.php>`_
* `this function never returns <https://3v4l.org/AtbW9>`_ [Try me]


PHP Error Messages
__________________

* `Declaration of x::foo() must be compatible with i::foo(): int <https://php-errors.readthedocs.io/en/latest/messages/declaration-of-%25s%3A%3A%25s%28%29-must-be-compatible-with-%25s%3A%3A%25s%28%29.html>`_



PHP Features
____________

* `attribute <https://php-dictionary.readthedocs.io/en/latest/dictionary/attribute.ini.html>`_

* `php-attribute <https://php-dictionary.readthedocs.io/en/latest/dictionary/php-attribute.ini.html>`_

* `custom <https://php-dictionary.readthedocs.io/en/latest/dictionary/custom.ini.html>`_

* `returntypewillchange <https://php-dictionary.readthedocs.io/en/latest/dictionary/returntypewillchange.ini.html>`_



Last updated: 14 July 2026