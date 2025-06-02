.. _hide-sensitive-parameter:

Hide Sensitive Parameter
------------------------

.. meta::
	:description:
		Hide Sensitive Parameter: PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hide Sensitive Parameter
	:twitter:description: Hide Sensitive Parameter: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/sensitiveParameter.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/sensitiveParameter.png
	:og:title: Hide Sensitive Parameter
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/sensitiveParameter.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sensitiveParameter.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sensitiveParameter.html","name":"Hide Sensitive Parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 14 Mar 2024 20:50:04 +0000","dateModified":"Thu, 14 Mar 2024 20:50:04 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sensitiveParameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP 8.2 has the #[SensitiveParameter] attribute that hides values in debug messages. 

There is also the SensitiveParameterValue class, that does the same, while working from the caller perspective. Get the value with $object->getValue().

.. image:: ../images/sensitiveParameter.png

See Also
________

* `SensitiveParameter (PHP manual) <https://www.php.net/manual/en/class.sensitiveparameter.php>`_
* `SensitiveParameterValue (PHP manual) <https://www.php.net/manual/en/class.sensitiveparametervalue.php>`_
* `Hide Sensitive Parameter (3v4l) <https://3v4l.org/KrViH>`_ [Try me]

