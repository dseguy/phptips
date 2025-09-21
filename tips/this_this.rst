.. _$this-$this:

$this $this
-----------

.. meta::
	:description:
		$this $this: $this is the pseudo-variable that represents the current object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $this $this
	:twitter:description: $this $this: $this is the pseudo-variable that represents the current object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/this_this.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/this_this.png
	:og:title: $this $this
	:og:type: article
	:og:description: $this is the pseudo-variable that represents the current object
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/this_this.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/this_this.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/this_this.html","name":"$this $this","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 18 May 2025 14:46:41 +0000","dateModified":"Sun, 18 May 2025 14:46:41 +0000","description":"$this is the pseudo-variable that represents the current object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/this_this.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/this_this.png

$this is the pseudo-variable that represents the current object. It is also a variable, like others, and may be used to describe a dynamic property.

Since a property must be described as a string, it is possible to use the magic method __toString() to convert the object into a string, and map an existing property.

See Also
________

* `$this (PHP manual) <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class>`_
* `$this->$this in the code <https://3v4l.org/K60Kl>`_ [Try me]


PHP Features
____________

* `$this <https://php-dictionary.readthedocs.io/en/latest/dictionary/%24this.ini.html>`_


