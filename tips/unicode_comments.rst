.. _unicode-comments:

Unicode Comments
----------------

.. meta::
	:description:
		Unicode Comments: Besides ``//``, ``#``, ``/** */`` and ``/* */``, there is another way to make a comment in PHP: unicode #️⃣️ .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unicode Comments
	:twitter:description: Unicode Comments: Besides ``//``, ``#``, ``/** */`` and ``/* */``, there is another way to make a comment in PHP: unicode #️⃣️ 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/unicode_comments.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/unicode_comments.png
	:og:title: Unicode Comments
	:og:type: article
	:og:description: Besides ``//``, ``#``, ``/** */`` and ``/* */``, there is another way to make a comment in PHP: unicode #️⃣️ 
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/unicode_comments.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unicode_comments.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unicode_comments.html","name":"Unicode Comments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 30 Nov 2024 10:25:42 +0000","dateModified":"Sat, 30 Nov 2024 10:25:42 +0000","description":"Besides ``\/\/``, ``#``, ``\/** *\/`` and ``\/* *\/``, there is another way to make a comment in PHP: unicode #\ufe0f\u20e3\ufe0f ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unicode_comments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Aken Roberts <https://bsky.app/profile/akenroberts.com>`_

Besides ``//``, ``#``, ``/** */`` and ``/* */``, there is another way to make a comment in PHP: unicode #️⃣️ . This is possible as this unicode character is build on top of 3 codepoints: among those, the first one is ``#``, which is an actual comment character. Then, PHP parses it as a single bytes, and interprets it as a comment: the rest of the line is omitted.

.. image:: ../images/unicode_comments.png

* `Comments (PHP manual) <https://www.php.net/manual/en/language.basic-syntax.comments.php>`_


