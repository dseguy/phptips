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

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invoke_and_properties.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invoke_and_properties.html","name":"__invoke() Method And Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Feb 2025 15:38:10 +0000","dateModified":"Thu, 20 Feb 2025 15:38:10 +0000","description":"In the code here, the __invoke() makes the class ``X`` invokable : the object may be used as a function name and it will call the magic method ``__invoke``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invoke_and_properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

In the code here, the __invoke() makes the class ``X`` invokable : the object may be used as a function name and it will call the magic method ``__invoke``.

Then, in the same class, there is a property ``$y``, with the type of ``X``. That property is, hence, holding an invokable object. So, may be, it is possible to call this property as a method, and invoke it?

Well, no. This call will yield an error, ``undefined method y``. PHP doesn't use the __invoke() here, as it would conflict with an existing ``y`` method. Also, that would make a case-sensitive method, as the property ``$Y`` doesn't exists.

To invoke the object in the property ``y``, one has to put parenthesis around the object, so that PHP can extract the object and then, invoke it safely.

.. image:: ../images/invoke_and_properties.png

See Also
________

* `__invoke and properties <https://3v4l.org/BtooN>`_

