.. _signature-compatibility-exception:

Signature Compatibility Exception
---------------------------------

.. meta::
	:description:
		Signature Compatibility Exception: All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Signature Compatibility Exception
	:twitter:description: Signature Compatibility Exception: All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/constructor_consistency.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/constructor_consistency.png
	:og:title: Signature Compatibility Exception
	:og:type: article
	:og:description: All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal)
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/constructor_consistency.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constructor_consistency.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constructor_consistency.html","name":"Signature Compatibility Exception","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 04 Feb 2024 14:57:03 +0000","dateModified":"Sun, 04 Feb 2024 14:57:03 +0000","description":"All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constructor_consistency.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

All methods must be compatible with their parent's signature: the types, reference options, variadic and number must be compatible (although, not equal).

The only exception are constructors, which may be completely different from their parent's. This is for backward compatibility.

.. image:: ../images/constructor_consistency.png

See Also
________

* `constructors <https://www.php.net/manual/en/control-structures.declare.php>`_

