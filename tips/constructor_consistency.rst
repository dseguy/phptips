.. _signature-compatibility-exception:

Signature Compatibility Exception
---------------------------------

.. meta::
	:description:
		Signature Compatibility Exception: All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal).
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: Signature Compatibility Exception.
	:twitter:description: Signature Compatibility Exception: All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal).
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/constructor_consistency.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/constructor_consistency.png.png.
	:og:image: Signature Compatibility Exception: All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal).

All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal).

The only exception are constructors, which may be completely different from their parent's. This is for backward compatibility.

.. image:: ../images/constructor_consistency.png

* `constructors <https://www.php.net/manual/en/control-structures.declare.php>`_


