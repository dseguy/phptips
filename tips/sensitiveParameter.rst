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
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/sensitiveParameter.png.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/sensitiveParameter.png
	:og:title: Hide Sensitive Parameter
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/sensitiveParameter.html
	:og:locale: en

PHP 8.2 has the #[SensitiveParameter] attribute that hides values in debug messages. 

There is also the SensitiveParameterValue class, that does the same, while working from the caller perspective. Get the value with $object->getValue().

.. image:: ../images/sensitiveParameter.png

* `SensitiveParameter (PHP manual) <https://www.php.net/manual/en/class.sensitiveparameter.php>`_
* `SensitiveParameterValue (PHP manual) <https://www.php.net/manual/en/class.sensitiveparametervalue.php>`_
* `Hide Sensitive Parameter (3v4l) <https://3v4l.org/KrViH>`_


