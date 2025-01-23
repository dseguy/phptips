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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/foreach_same_keys.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/foreach_same_keys.html","name":"foreach() With All The Same Keys","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 24 Sep 2023 08:23:54 +0000","dateModified":"Sun, 24 Sep 2023 08:23:54 +0000","description":"It is possible for a foreach() loop to produce multiple times the same key","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/foreach_same_keys.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

It is possible for a foreach() loop to produce multiple times the same key. To do so, avoid using arrays, which enforce the unique key.

One need to use a generator or a Traversable class, where the same key is always yielded.

.. image:: ../images/foreach_same_keys.png

* `foreach (PHP manual) <https://www.php.net/manual/en/control-structures.foreach.php>`_
* `yield (PHP manual) <https://www.php.net/manual/en/language.generators.syntax.php>`_


