.. _function-name-in-a-method:

Function Name In A Method
-------------------------

.. meta::
	:description:
		Function Name In A Method: The magic constants give information on the context of execution of the code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Function Name In A Method
	:twitter:description: Function Name In A Method: The magic constants give information on the context of execution of the code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/FunctionNameInAMethod.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/FunctionNameInAMethod.png
	:og:title: Function Name In A Method
	:og:type: article
	:og:description: The magic constants give information on the context of execution of the code
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/FunctionNameInAMethod.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/FunctionNameInAMethod.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/FunctionNameInAMethod.html","name":"Function Name In A Method","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:30:26+00:00","dateModified":"2026-07-14T14:30:26+00:00","description":"The magic constants give information on the context of execution of the code","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/FunctionNameInAMethod.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   class X {
       function foo() {
           print __METHOD__.PHP_EOL;
           print __CLASS__.PHP_EOL;
           print __FUNCTION__.PHP_EOL;
       }
   }
   
   (new x)->foo();
   
       function foo() {
           print __METHOD__.PHP_EOL;
           print __CLASS__.PHP_EOL;
           print __FUNCTION__.PHP_EOL;
       }
   
   foo();


The magic constants give information on the context of execution of the code. ``__METHOD__`` gives the name of the method, and its related class. ``__CLASS__`` gives the name of the current class, whatever the method. And ``__FUNCTION__`` gives the name of the current function, or, also, the name of the method, though without the name of the class.

Basically, ``__METHOD__ === __CLASS__ .'::'. __FUNCTION__``.

Also, just for fun, you can also use ``__METHOD__`` in a function, and you'll get the same as ``__FUNCTION__``. The opposite, as we can see, is not true.

See Also
________

* `Magic constants <https://3v4l.org/JuFfn>`_ [Try me]


PHP Features
____________

* `magic-constant <https://php-dictionary.readthedocs.io/en/latest/dictionary/magic-constant.ini.html>`_

* `method <https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html>`_

* `function <https://php-dictionary.readthedocs.io/en/latest/dictionary/function.ini.html>`_



Last updated: 14 July 2026