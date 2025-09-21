.. _foreach()-with-all-the-same-keys:

foreach() With All The Same Keys
--------------------------------

.. meta::
	:description:
		foreach() With All The Same Keys: It is possible for a foreach() loop to produce multiple times the same key.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: foreach() With All The Same Keys
	:twitter:description: foreach() With All The Same Keys: It is possible for a foreach() loop to produce multiple times the same key
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/foreach_same_keys.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/foreach_same_keys.png
	:og:title: foreach() With All The Same Keys
	:og:type: article
	:og:description: It is possible for a foreach() loop to produce multiple times the same key
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/foreach_same_keys.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/foreach_same_keys.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/foreach_same_keys.html","name":"foreach() With All The Same Keys","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 20:06:38 +0000","dateModified":"Fri, 27 Jun 2025 20:06:38 +0000","description":"It is possible for a foreach() loop to produce multiple times the same key","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/foreach_same_keys.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. image:: ../images/foreach_same_keys.png

It is possible for a foreach() loop to produce multiple times the same key. To do so, avoid using arrays, which enforce the unique key.

One need to use a generator or a Traversable class, where the same key is always yielded.

See Also
________

* `foreach (PHP manual) <https://www.php.net/manual/en/control-structures.foreach.php>`_
* `yield (PHP manual) <https://www.php.net/manual/en/language.generators.syntax.php>`_
* `yielding the same key <https://3v4l.org/KTj27>`_ [Try me]


PHP Features
____________

* `yield <https://php-dictionary.readthedocs.io/en/latest/dictionary/yield.ini.html>`_

* `index-array <https://php-dictionary.readthedocs.io/en/latest/dictionary/index-array.ini.html>`_

* `double-arrow <https://php-dictionary.readthedocs.io/en/latest/dictionary/double-arrow.ini.html>`_


