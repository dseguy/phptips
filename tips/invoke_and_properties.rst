.. ___invoke()-method-and-properties:

__invoke() Method And Properties
--------------------------------

.. meta::
	:description:
		__invoke() Method And Properties: In the code here, the __invoke() makes the class ``X`` invokable : the object may be used as a function name and it will call the magic method ``__invoke``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __invoke() Method And Properties
	:twitter:description: __invoke() Method And Properties: In the code here, the __invoke() makes the class ``X`` invokable : the object may be used as a function name and it will call the magic method ``__invoke``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/invoke_and_properties.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/invoke_and_properties.png
	:og:title: __invoke() Method And Properties
	:og:type: article
	:og:description: In the code here, the __invoke() makes the class ``X`` invokable : the object may be used as a function name and it will call the magic method ``__invoke``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/invoke_and_properties.html
	:og:locale: en

In the code here, the __invoke() makes the class ``X`` invokable : the object may be used as a function name and it will call the magic method ``__invoke``.

Then, in the same class, there is a property ``$y``, with the type of ``X``. That property is, hence, holding an invokable object. So, may be, it is possible to call this property as a method, and invoke it?

Well, no. This call will yield an error, ``undefined method y``. PHP doesn't use the __invoke() here, as it would conflict with an existing ``y`` method. Also, that would make a case-sensitive method, as the property ``$Y`` doesn't exists.

To invoke the object in the property ``y``, one has to put parenthesis around the object, so that PHP can extract the object and then, invoke it safely.

.. image:: ../images/invoke_and_properties.png

* `__invoke() (PHP manual) <https://www.php.net/manual/en/language.oop5.magic.php#object.invoke>`_


