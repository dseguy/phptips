.. _child-of-attribute-is-not-an-attribute:

Child Of Attribute Is Not An Attribute
--------------------------------------

.. meta::
	:description:
		Child Of Attribute Is Not An Attribute: A class attribute must be marked with an attribute called ``Attribute``.
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: Child Of Attribute Is Not An Attribute.
	:twitter:description: Child Of Attribute Is Not An Attribute: A class attribute must be marked with an attribute called ``Attribute``.
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/no_child_with_attribute.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/no_child_with_attribute.png.png.
	:og:image: Child Of Attribute Is Not An Attribute: A class attribute must be marked with an attribute called ``Attribute``.

A class attribute must be marked with an attribute called ``Attribute``. It is compulsory to use Reflection and obtain an instance of the attribute.

That attribute is only for the class itself, and it doesn't propagate automatically to the child classes.

On the other hand, the ``Attribute`` class cannot be extended: it is not possible to create a child that may carry some of the ``Attribute`` properties.

.. image:: ../images/no_child_with_attribute.png

* `Attributes Overview (PHP manual) <https://www.php.net/manual/en/language.attributes.overview.php>`_


