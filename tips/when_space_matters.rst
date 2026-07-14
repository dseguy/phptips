.. _when-space-matters:

When Space Matters
------------------

.. meta::
	:description:
		When Space Matters: The two first echo are valid, because there is a space between the integer and the dot : PHP interpret them as a concatenation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: When Space Matters
	:twitter:description: When Space Matters: The two first echo are valid, because there is a space between the integer and the dot : PHP interpret them as a concatenation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/when_space_matters.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/when_space_matters.png
	:og:title: When Space Matters
	:og:type: article
	:og:description: The two first echo are valid, because there is a space between the integer and the dot : PHP interpret them as a concatenation
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/when_space_matters.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/when_space_matters.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/when_space_matters.html","name":"When Space Matters","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:34:01+00:00","dateModified":"2026-07-14T14:34:01+00:00","description":"The two first echo are valid, because there is a space between the integer and the dot : PHP interpret them as a concatenation","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/when_space_matters.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   echo 10 / 1 . ' ms ';
   echo 10 / 2 .' ms ';
   
   //Parse error: syntax error, unexpected single-quoted string " ms ", expecting "," or ";" 
   echo 10 / 3. ' ms ';
   
   //Parse error: syntax error, unexpected single-quoted string " ms ", expecting "," or ";" 
   echo 10 / 4.' ms ';
   
   // OK again
   echo 10 / 5.6. ' ms ';


The two first echo are valid, because there is a space between the integer and the dot : PHP interpret them as a concatenation.

The third and fourth ones are a syntax error, because PHP starts interpreting a float, but fail to get the decimal part.

Finally, the last echo is valid, because PHP managed to build a float, so it doesn't mistake the second point with another float, and use it as a concatenation.

Some edge cases of white space matters in the syntax.

See Also
________

* `When space matters <https://3v4l.org/EvDBu>`_ [Try me]


PHP Features
____________

* `space <https://php-dictionary.readthedocs.io/en/latest/dictionary/space.ini.html>`_

* `syntax-error <https://php-dictionary.readthedocs.io/en/latest/dictionary/syntax-error.ini.html>`_



Last updated: 14 July 2026