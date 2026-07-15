.. _closuregetcurrent-to-reach-the-closure:

Closure::getCurrent() To Reach The Closure
------------------------------------------

.. meta::
	:description:
		Closure::getCurrent() To Reach The Closure: I was happy to see PHP add ``Closure::getCurrent()``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Closure::getCurrent() To Reach The Closure
	:twitter:description: Closure::getCurrent() To Reach The Closure: I was happy to see PHP add ``Closure::getCurrent()``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/closure_getcurrent.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/closure_getcurrent.png
	:og:title: Closure::getCurrent() To Reach The Closure
	:og:type: article
	:og:description: I was happy to see PHP add ``Closure::getCurrent()``
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/closure_getcurrent.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_getcurrent.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_getcurrent.html","name":"Closure::getCurrent() To Reach The Closure","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-15T17:55:09+00:00","dateModified":"2026-07-15T17:55:09+00:00","description":"I was happy to see PHP add ``Closure::getCurrent()``","inLanguage":"en-US","author":{"@id":"https:\/\/x.com\/timacdonald87\/status\/2077183471882227858"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/closure_getcurrent.html"]}]},{"@type":"Person","@id":"https:\/\/x.com\/timacdonald87\/status\/2077183471882227858","name":"Tim MacDonald","url":"https:\/\/x.com\/timacdonald87\/status\/2077183471882227858","sameAs":["https:\/\/x.com\/timacdonald87\/status\/2077183471882227858"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Tim MacDonald <https://x.com/timacdonald87/status/2077183471882227858>`_

.. code-block:: php

   <?php
   
       $fibonnacci = function (int $n, $previous2 = 0, $previous1 = 1) {
       if ($n <= 1) {
           return $previous2 + $previous1;
       }
       
       $closure = Closure::getCurrent();
       return $closure($n - 1, $previous1, $previous1 + $previous2);
   };
   print $fibonnacci(4);


I was happy to see PHP add ``Closure::getCurrent()``.

Now I'm using it, I can't help but think we should add a ``Closure::callCurrent(/* ... */)``.

I don't want to assign a variable, I don't need the thing. Invoking the return of a function inline also feels needlessly clunky.

See Also
________

* `Access The Closure <https://3v4l.org/cdKnN#v8.5.8>`_ [Try me]


PHP Features
____________

* `closure <https://php-dictionary.readthedocs.io/en/latest/dictionary/closure.ini.html>`_

* `recursion <https://php-dictionary.readthedocs.io/en/latest/dictionary/recursion.ini.html>`_

* `closure-class <https://php-dictionary.readthedocs.io/en/latest/dictionary/closure-class.ini.html>`_



Last updated: 15 July 2026