.. _clone-clone-clone:

Clone Clone Clone
-----------------

.. meta::
	:description:
		Clone Clone Clone: It is possible to chain clone operators : PHP optimize this and skips any intermediate clone.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Clone Clone Clone
	:twitter:description: Clone Clone Clone: It is possible to chain clone operators : PHP optimize this and skips any intermediate clone
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/clone_clone_clone.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/clone_clone_clone.png
	:og:title: Clone Clone Clone
	:og:type: article
	:og:description: It is possible to chain clone operators : PHP optimize this and skips any intermediate clone
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/clone_clone_clone.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/clone_clone_clone.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/clone_clone_clone.html","name":"Clone Clone Clone","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Jun 2025 19:53:14 +0000","dateModified":"Mon, 09 Jun 2025 19:53:14 +0000","description":"It is possible to chain clone operators : PHP optimize this and skips any intermediate clone","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/clone_clone_clone.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

It is possible to chain clone operators : PHP optimize this and skips any intermediate clone. The resulting final object is number 2, so the inner clones were duly ignored. 

On the other hand, it is possible to create a new object from an existing object, but it is not possible to chain the new calls without using parenthesis.

.. image:: ../images/clone_clone_clone.png

See Also
________

* `Cloning objects <https://www.php.net/manual/en/language.oop5.cloning.php>`_
* `new <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new>`_
* `Cloning a clone <https://3v4l.org/r2RsW>`_ [Try me]

