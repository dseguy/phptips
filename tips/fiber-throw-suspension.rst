.. _fiber-throws-where-the-fiber-is:

Fiber Throws Where The Fiber Is
-------------------------------

.. meta::
	:description:
		Fiber Throws Where The Fiber Is: ``Fiber`` is the generator's sibling that nobody writes tips about, so here is one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fiber Throws Where The Fiber Is
	:twitter:description: Fiber Throws Where The Fiber Is: ``Fiber`` is the generator's sibling that nobody writes tips about, so here is one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/fiber-throw-suspension.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/fiber-throw-suspension.png
	:og:title: Fiber Throws Where The Fiber Is
	:og:type: article
	:og:description: ``Fiber`` is the generator's sibling that nobody writes tips about, so here is one
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/fiber-throw-suspension.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/fiber-throw-suspension.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/fiber-throw-suspension.html","name":"Fiber Throws Where The Fiber Is","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:42+00:00","dateModified":"2026-07-14T14:31:42+00:00","description":"``Fiber`` is the generator's sibling that nobody writes tips about, so here is one","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/fiber-throw-suspension.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   // Illustrates: $fiber->throw($exception) resumes the fiber and raises the
   // exception exactly where Fiber::suspend() paused it, not in the caller's scope.
   
   $fiber = new Fiber(function (): void {
       echo "fiber: starting
   ";
   
       try {
           $value = Fiber::suspend('paused, waiting for input');
           echo "fiber: resumed normally with '{$value}'
   ";
       } catch (RuntimeException $e) {
           // This ordinary try/catch, wrapped around suspend(), catches the
           // exception injected by Fiber::throw() -- no special API needed.
           echo "fiber: caught injected exception: '{$e->getMessage()}'
   ";
       }
   
       echo "fiber: finishing
   ";
   });
   
   echo "main: getCurrent() outside any fiber is: ";
   var_dump(Fiber::getCurrent());
   
   $suspendedValue = $fiber->start();
   echo "main: fiber suspended with '{$suspendedValue}'
   ";
   
   // This does NOT throw here, in main's scope. It resumes the fiber and the
   // exception surfaces at the suspend() call above, inside the fiber's body.
   $fiber->throw(new RuntimeException('something went wrong'));
   
   echo "main: fiber finished? " . ($fiber->isTerminated() ? 'yes' : 'no') . "
   ";
   
   // Starting an already-started (and now terminated) fiber is not a silent
   // no-op: it throws a FiberError.
   try {
       $fiber->start();
   } catch (FiberError $e) {
       echo "main: caught FiberError: '{$e->getMessage()}'
   ";
   }


``Fiber`` is the generator's sibling that nobody writes tips about, so here is one.

``$fiber->throw($exception)`` does not throw in the caller's own scope. It resumes the suspended fiber and raises the exception exactly at the ``Fiber::suspend()`` call that paused it, as if that call itself had thrown.

That means an ordinary ``try``/``catch`` written around the ``suspend()`` call inside the fiber's body will catch it, with no special API needed on the fiber's side.

Also note that ``Fiber::getCurrent()`` returns ``null`` outside of any fiber, and that starting an already-started fiber throws a ``FiberError``, not a silent no-op.

See Also
________

* `Fiber (PHP manual) <https://www.php.net/manual/en/class.fiber.php>`_
* `Fiber::throw (PHP manual) <https://www.php.net/manual/en/fiber.throw.php>`_
* `Throwing from fibers <https://3v4l.org/tLEP5#v8.5.7>`_ [Try me]


PHP Features
____________

* `fibers <https://php-dictionary.readthedocs.io/en/latest/dictionary/fibers.ini.html>`_

* `generator <https://php-dictionary.readthedocs.io/en/latest/dictionary/generator.ini.html>`_

* `exception <https://php-dictionary.readthedocs.io/en/latest/dictionary/exception.ini.html>`_



Last updated: 14 July 2026