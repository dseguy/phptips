.. _coalesce-and-null:

Coalesce And Null
-----------------

.. meta::
	:description:
		Coalesce And Null: I'm still struggling to pick a side in this debate.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Coalesce And Null
	:twitter:description: Coalesce And Null: I'm still struggling to pick a side in this debate
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/coalesce_is_null.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/coalesce_is_null.png
	:og:title: Coalesce And Null
	:og:type: article
	:og:description: I'm still struggling to pick a side in this debate
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/coalesce_is_null.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/coalesce_is_null.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/coalesce_is_null.html","name":"Coalesce And Null","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 29 Apr 2025 20:55:15 +0000","dateModified":"Tue, 29 Apr 2025 20:55:15 +0000","description":"I'm still struggling to pick a side in this debate","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/coalesce_is_null.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

I'm still struggling to pick a side in this debate.



@ is too slow, because it merely hides the error.



``??`` looks dumb. It looks like : if it is null, use null as default.



the if() command is long to type.

Is there another way to handle this issue?

.. image:: ../images/coalesce_is_null.png

See Also
________

* `Error Control Operators <https://www.php.net/manual/en/language.operators.errorcontrol.php>`_
* `3 ways to check on null <https://3v4l.org/Y8IUC>`_ [Try me]

