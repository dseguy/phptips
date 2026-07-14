.. _impossible-named-arguments:

Impossible Named Arguments
--------------------------

.. meta::
	:description:
		Impossible Named Arguments: Named parameters use the parameter name to allocate the argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Impossible Named Arguments
	:twitter:description: Impossible Named Arguments: Named parameters use the parameter name to allocate the argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/impossible_named_arguments.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/impossible_named_arguments.png
	:og:title: Impossible Named Arguments
	:og:type: article
	:og:description: Named parameters use the parameter name to allocate the argument
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/impossible_named_arguments.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/impossible_named_arguments.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/impossible_named_arguments.html","name":"Impossible Named Arguments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:31:54 +0000","dateModified":"Tue, 14 Jul 2026 14:31:54 +0000","description":"Named parameters use the parameter name to allocate the argument","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/impossible_named_arguments.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
     
   function foo(...$args) {
       echo $args['a b' ] ?? $args['a$b'] ?? $args['我'];
   }
   
   foo(...['a b' => 'c']);  // c
   foo(...['a$b' => 'd']);  // d
   foo(我: 3);              // 3
     
   ?>


Named parameters use the parameter name to allocate the argument. This implies that the provided parameter names are all compatible with a the variable name format. For example, it is not possible to use a space or a ``$`` sign in a variable name.

On the other hand, using the spread ``...`` operator on an array turns the string keys as named parameter. Any string may be an array index, so they are transmitted to the function. There, they are not validated against the variable name format, but simply checked against the list of existing parameters.

An edge case is the variadic parameter. That parameter accepts any named parameter, even if it does not check the variable format, as these values are stored in an array 

And that's how it is possible to use impossible named parameter.

See Also
________

* `Using impossible parameter names <https://3v4l.org/U88Ip>`_ [Try me]


PHP Features
____________

* `named-parameter <https://php-dictionary.readthedocs.io/en/latest/dictionary/named-parameter.ini.html>`_

* `array-spread <https://php-dictionary.readthedocs.io/en/latest/dictionary/array-spread.ini.html>`_

* `variable <https://php-dictionary.readthedocs.io/en/latest/dictionary/variable.ini.html>`_


