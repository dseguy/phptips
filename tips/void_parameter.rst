.. _void-parameter-in-array_keys():

Void Parameter In array_keys()
------------------------------

.. meta::
	:description:
		Void Parameter In array_keys(): There is a 'void' parameter in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Void Parameter In array_keys()
	:twitter:description: Void Parameter In array_keys(): There is a 'void' parameter in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/void_parameter.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/void_parameter.png
	:og:title: Void Parameter In array_keys()
	:og:type: article
	:og:description: There is a 'void' parameter in PHP
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/void_parameter.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/void_parameter.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/void_parameter.html","name":"Void Parameter In array_keys()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 03 Aug 2025 06:20:38 +0000","dateModified":"Sun, 03 Aug 2025 06:20:38 +0000","description":"There is a 'void' parameter in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/void_parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/void_parameter.png

There is a 'void' parameter in PHP. It is the second argument of array_keys().

That second parameter is often omitted (and unknown). 

If present, it is typed 'mixed' to allow any value to be searched (here, null). 



If absent, array_keys() returns ALL keys. When absent, it is not null, nor any other type. The last one possible is 'void' 

Type is then : void|mixed.

See Also
________

* `null as a parameter <https://3v4l.org/3JsR4>`_ [Try me]


PHP Features
____________

* `null <https://php-dictionary.readthedocs.io/en/latest/dictionary/null.ini.html>`_

* `void <https://php-dictionary.readthedocs.io/en/latest/dictionary/void.ini.html>`_

* `parameter <https://php-dictionary.readthedocs.io/en/latest/dictionary/parameter.ini.html>`_


