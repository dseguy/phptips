.. _other-types-for-a-property:

Other Types For A Property
--------------------------

.. meta::
	:description:
		Other Types For A Property: It is possible to make a typed property accept more than its definition type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Other Types For A Property
	:twitter:description: Other Types For A Property: It is possible to make a typed property accept more than its definition type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/other_type_for_property.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/other_type_for_property.png
	:og:title: Other Types For A Property
	:og:type: article
	:og:description: It is possible to make a typed property accept more than its definition type
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/other_type_for_property.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/other_type_for_property.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/other_type_for_property.html","name":"Other Types For A Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:32:53 +0000","dateModified":"Tue, 14 Jul 2026 14:32:53 +0000","description":"It is possible to make a typed property accept more than its definition type","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/other_type_for_property.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class X {
       
       public string $p {
           set(string|A|null $value)  {
               $this->p = (string) $value;
           }
           
           get => $this-p . ' more';
       }
   }
   
   class A {
       function __toString() {
           return 'abc';
       }
   }
   
   $x = new X;
   $x->p = new A;


It is possible to make a typed property accept more than its definition type.

Thanks to hooked property, the type of the incoming value may be different from the final type: indeed, the property hook has to convert that value to the actual type.

One constraint is that the supported type must be wider than the underlying property type. It is easily achieved by using a union type of the property type and all other needed types.

On the other hand, the ``get`` hook can only return its exact type: no covariance, no contravariance.

See Also
________

* `A property's writable type can now differ from its readable type <https://x.com/alexdaubois/status/2069322570831163788>`_
* `Setting a value to a property <https://3v4l.org/vuKfQ#v8.5.7>`_ [Try me]


PHP Features
____________

* `property-hook <https://php-dictionary.readthedocs.io/en/latest/dictionary/property-hook.ini.html>`_

* `type <https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html>`_

* `type-contravariance <https://php-dictionary.readthedocs.io/en/latest/dictionary/type-contravariance.ini.html>`_

* `union-type <https://php-dictionary.readthedocs.io/en/latest/dictionary/union-type.ini.html>`_


