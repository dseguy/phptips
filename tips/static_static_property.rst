.. _cannot-static-static-property:

Cannot Static Static Property
-----------------------------

Static can be used as a keyword to mark a property as 'static' (sic). It could also be used as a type for that same property, leading to those confusing lines below.

In fact, static would accept ``self``, but also ``parent`` and any children class: just like ``self``. So, ``self`` is sufficient to type properties, and there is no need for ``static static``.

.. image:: ../images/static_static_property.png

* `Static properties (PHP manual) <https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties>`_
* `Late Static Binding (PHP manual) <https://www.php.net/manual/en/language.oop5.late-static-bindings.php#language.oop5.late-static-bindings>`_
* `5 usages of static keyword in PHP <https://www.exakat.io/en/5-usages-of-static-keyword-in-php/>`_


