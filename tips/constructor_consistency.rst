.. _signature-compatibility-exception:

Signature Compatibility Exception
---------------------------------

.. meta::
	:description:
		Signature Compatibility Exception: All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Signature Compatibility Exception
	:twitter:description: Signature Compatibility Exception: All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/constructor_consistency.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/constructor_consistency.png
	:og:title: Signature Compatibility Exception
	:og:type: article
	:og:description: All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/constructor_consistency.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constructor_consistency.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constructor_consistency.html","name":"Signature Compatibility Exception","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:20 +0000","dateModified":"Tue, 14 Jul 2026 14:31:20 +0000","description":"All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constructor_consistency.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   // Normal constructor
   abstract class x {
        function __construct($a) {}
   }
   
   class y extends x {
       // OK
       function __construct($b, $c) {}
   }
   
   // abstract constructor
   abstract class x2 {
        abstract function __construct($a);
   }
   
   class y2 extends x2 {
       // KO
       function __construct($b, $c) {}
   }
   
   // With interface
   interface i3 {
        abstract function __construct($a);
   }
   
   class y3 implements i3 {
       // KO
       function __construct($b, $c) {}
   }


All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal).

The exception are constructors, which may be completely different from their parent's. This is for backward compatibility.

And this rule also has the exception that abstract constructor, in interfaces and abstract parent classes, must be compatible, and their signature are enforced. Normal constructor are free.

See Also
________

* `constructors <https://www.php.net/manual/en/control-structures.declare.php>`_
* `compatible or not? <https://3v4l.org/GAiN9>`_ [Try me]


PHP Features
____________

* `constructor <https://php-dictionary.readthedocs.io/en/latest/dictionary/constructor.ini.html>`_

* `abstract <https://php-dictionary.readthedocs.io/en/latest/dictionary/abstract.ini.html>`_

* `interface <https://php-dictionary.readthedocs.io/en/latest/dictionary/interface.ini.html>`_

* `inheritance <https://php-dictionary.readthedocs.io/en/latest/dictionary/inheritance.ini.html>`_


