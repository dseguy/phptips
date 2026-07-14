.. _type-is-not-always-returned:

Type Is Not Always Returned
---------------------------

.. meta::
	:description:
		Type Is Not Always Returned: A method can display a return type, and never return it actually.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type Is Not Always Returned
	:twitter:description: Type Is Not Always Returned: A method can display a return type, and never return it actually
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/type_is_not_available.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/type_is_not_available.png
	:og:title: Type Is Not Always Returned
	:og:type: article
	:og:description: A method can display a return type, and never return it actually
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/type_is_not_available.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type_is_not_available.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type_is_not_available.html","name":"Type Is Not Always Returned","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:45+00:00","dateModified":"2026-07-14T14:33:45+00:00","description":"A method can display a return type, and never return it actually","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type_is_not_available.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class x implements y {
       function foo(): bool {
           throw new exception('Ah!');
       }
   }
   
   interface y {
       function foo(): bool;
   }
   
   ?>


A method can display a return type, and never return it actually. This happens with exceptions, errors, yield and infinite loops. May be 'never' would be a better choice, if possible.

On the other hand, a function returning 'void', aka returning nothing, should not have any return statement, including the hidden one at the end of the method.

See Also
________

* `Type Declaration (PHP manual) <https://www.php.net/manual/en/language.types.declarations.php>`_
* `Typed in interface, not available <https://3v4l.org/ea7eA>`_ [Try me]


PHP Features
____________

* `type <https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html>`_

* `return-type <https://php-dictionary.readthedocs.io/en/latest/dictionary/return-type.ini.html>`_

* `never <https://php-dictionary.readthedocs.io/en/latest/dictionary/never.ini.html>`_



Last updated: 14 July 2026