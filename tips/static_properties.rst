.. _static-properties:

Static Properties
-----------------

.. meta::
	:description:
		Static Properties: It is easy to read that the property ``$x`` is of type ``Test`` (via static), with an impossible default value of 0.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Properties
	:twitter:description: Static Properties: It is easy to read that the property ``$x`` is of type ``Test`` (via static), with an impossible default value of 0
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/static_properties.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/static_properties.png
	:og:title: Static Properties
	:og:type: article
	:og:description: It is easy to read that the property ``$x`` is of type ``Test`` (via static), with an impossible default value of 0
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/static_properties.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_properties.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_properties.html","name":"Static Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:36 +0000","dateModified":"Tue, 14 Jul 2026 14:33:36 +0000","description":"It is easy to read that the property ``$x`` is of type ``Test`` (via static), with an impossible default value of 0","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static_properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
       class Test {
           public static $x = 0;
       }
       class Test2 extends Test {
           // $x is inherited
       }
       class Test3 extends Test {
           // $x is NOT inherited
           public static $x = 3;
       }
       
   	$x = 1;
       Test2::$x = &$x;
       
       var_dump(Test::$x, Test2::$x, Test3::$x);
       // int(1), int(1), int(3)
   ?>


It is easy to read that the property ``$x`` is of type ``Test`` (via static), with an impossible default value of 0. In fact, this property is not typed, as using ``static`` is not a possible type for properties.

Secondly, static properties are inherited and shared with the parent static properties, unless they are declared again. In that case, they are distinct.

See Also
________

* `Static Properties on 3v4l <https://3v4l.org/78oEF>`_ [Try me]


PHP Features
____________

* `static-property <https://php-dictionary.readthedocs.io/en/latest/dictionary/static-property.ini.html>`_

* `property <https://php-dictionary.readthedocs.io/en/latest/dictionary/property.ini.html>`_

* `static <https://php-dictionary.readthedocs.io/en/latest/dictionary/static.ini.html>`_


