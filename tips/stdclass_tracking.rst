.. _stdclass-object:

stdClass Object
---------------

.. meta::
	:description:
		stdClass Object: PHP recycles the previously created stdClass objects ids.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: stdClass Object
	:twitter:description: stdClass Object: PHP recycles the previously created stdClass objects ids
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/stdclass_tracking.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/stdclass_tracking.png
	:og:title: stdClass Object
	:og:type: article
	:og:description: PHP recycles the previously created stdClass objects ids
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/stdclass_tracking.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/stdclass_tracking.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/stdclass_tracking.html","name":"stdClass Object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 03 Aug 2025 20:13:18 +0000","dateModified":"Sun, 03 Aug 2025 20:13:18 +0000","description":"PHP recycles the previously created stdClass objects ids","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/stdclass_tracking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

PHP recycles the previously created stdClass objects ids. The following code displays Object #1, until it is stored in $b. When the stdClass is not stored in a container (variable, property, etc.), it is completely lost and no object counting happens.

Also, PHP's stdClass's constructor ignores all its arguments, as they are not used.

.. image:: ../images/stdclass_tracking.png

See Also
________

* `The stdClass class (PHP manual) <https://www.php.net/manual/en/class.stdclass.php>`_
* `Recycling stdclass <https://3v4l.org/Pnkll>`_ [Try me]

