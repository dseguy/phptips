.. _internal-static-call:

Internal Static Call
--------------------

.. meta::
	:description:
		Internal Static Call: Trap of the day : one of the calls in bar() will generate a 'Non-static method a::foo() cannot be called statically' error.
	:twitter:card: summary_large_image.
	:twitter:site: @exakat.
	:twitter:title: Internal Static Call.
	:twitter:description: Internal Static Call: Trap of the day : one of the calls in bar() will generate a 'Non-static method a::foo() cannot be called statically' error.
	:twitter:creator: @exakat.
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/internal_static_call.png.png.
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/internal_static_call.png.png.
	:og:image: Internal Static Call: Trap of the day : one of the calls in bar() will generate a 'Non-static method a::foo() cannot be called statically' error.

Trap of the day : one of the calls in bar() will generate a 'Non-static method a::foo() cannot be called statically' error. 

Which one? It is the d::foo(). All other calls are made within the C class : internal calls may use static or normal syntax, while external calls must use the correct call syntax. This allows calls like 'parent::__construct()'. 

When the call to bar() is made with '(new d)', the 'd::foo()' works again.

.. image:: ../images/internal_static_call.png

* `Late Static Bindings (PHP manual) <https://www.php.net/manual/en/language.oop5.late-static-bindings.php>`_


