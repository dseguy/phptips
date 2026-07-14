.. _every-anonymous-class-is-different:

Every Anonymous Class Is Different
----------------------------------

.. meta::
	:description:
		Every Anonymous Class Is Different: Anonymous classes don't have an explicit name, yet PHP uses one internally.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Every Anonymous Class Is Different
	:twitter:description: Every Anonymous Class Is Different: Anonymous classes don't have an explicit name, yet PHP uses one internally
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/every_anonymous_class.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/every_anonymous_class.png
	:og:title: Every Anonymous Class Is Different
	:og:type: article
	:og:description: Anonymous classes don't have an explicit name, yet PHP uses one internally
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/every_anonymous_class.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/every_anonymous_class.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/every_anonymous_class.html","name":"Every Anonymous Class Is Different","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:53:09 +0000","dateModified":"Tue, 14 Jul 2026 14:53:09 +0000","description":"Anonymous classes don't have an explicit name, yet PHP uses one internally","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/every_anonymous_class.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   print get_class($c = new class() {});
   //class@anonymousphp-wasm run script:3$0
   $d = new class() {};
   
   var_dump($c instanceof $d);
   // false!
   
   interface i {}
   
   $e = new class() implements i {};
   var_dump($e instanceof i);
   // true
   
   function foo() {
       return new class() {};
   }
   $x = foo();
   var_dump(foo() instanceof $x);
   // syntax error !
   // var_dump($x instanceof foo());
   
   ?>


Anonymous classes don't have an explicit name, yet PHP uses one internally. That name is build on top of the localisation of the class definition in the code.

This means that two anonymous class objects (sic), created with the same code, but at different places in the code, are considered of a different type by PHP.

On the other hand, when the same piece of code produces the anonymous class object, it is considered of the same class.

Note that the syntax ``foo() instanceof $x`` is valid, but ``$x instanceof foo()`` is not. The second operand of ``instanceof`` is a bit precious, and forbid many expressions: this is the case of a simple assignation.

See Also
________

* `Anonymous and different <https://3v4l.org/C93Ug>`_ [Try me]


PHP Features
____________

* `instanceof <https://php-dictionary.readthedocs.io/en/latest/dictionary/instanceof.ini.html>`_

* `anonymous <https://php-dictionary.readthedocs.io/en/latest/dictionary/anonymous.ini.html>`_

* `explicit <https://php-dictionary.readthedocs.io/en/latest/dictionary/explicit.ini.html>`_

* `name <https://php-dictionary.readthedocs.io/en/latest/dictionary/name.ini.html>`_

* `php <https://php-dictionary.readthedocs.io/en/latest/dictionary/php.ini.html>`_

* `class <https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html>`_

* `definition <https://php-dictionary.readthedocs.io/en/latest/dictionary/definition.ini.html>`_

* `anonymous-class <https://php-dictionary.readthedocs.io/en/latest/dictionary/anonymous-class.ini.html>`_

* `object <https://php-dictionary.readthedocs.io/en/latest/dictionary/object.ini.html>`_

* `type <https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html>`_

* `syntax <https://php-dictionary.readthedocs.io/en/latest/dictionary/syntax.ini.html>`_

* `not <https://php-dictionary.readthedocs.io/en/latest/dictionary/not.ini.html>`_

* `operand <https://php-dictionary.readthedocs.io/en/latest/dictionary/operand.ini.html>`_

* `expression <https://php-dictionary.readthedocs.io/en/latest/dictionary/expression.ini.html>`_

* `case <https://php-dictionary.readthedocs.io/en/latest/dictionary/case.ini.html>`_

* `assignation <https://php-dictionary.readthedocs.io/en/latest/dictionary/assignation.ini.html>`_


