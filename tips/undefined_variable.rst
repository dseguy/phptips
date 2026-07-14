.. _undefined-variable:

Undefined Variable
------------------

.. meta::
	:description:
		Undefined Variable: The variable is undefined, and yet this is reported on the actual line where the variable is defined!.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined Variable
	:twitter:description: Undefined Variable: The variable is undefined, and yet this is reported on the actual line where the variable is defined!
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/undefined_variable.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/undefined_variable.png
	:og:title: Undefined Variable
	:og:type: article
	:og:description: The variable is undefined, and yet this is reported on the actual line where the variable is defined!
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/undefined_variable.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined_variable.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined_variable.html","name":"Undefined Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:50 +0000","dateModified":"Tue, 14 Jul 2026 14:33:50 +0000","description":"The variable is undefined, and yet this is reported on the actual line where the variable is defined!","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined_variable.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   http://www.example.com/foo 
   function foo($a) {
       // what does this do?
   }
   
   ?>


The variable is undefined, and yet this is reported on the actual line where the variable is defined!

In fact, the assignation to ``$x`` appears to be the definition of the variable, because we, as human, encounter it first while reading.

Upon close inspection, the variable is actually used in the call to the function ``foo``: PHP evaluates the arguments before calling the function, and finally, make the assignation. So the ``$x``, used as second parameter in the ``foo`` call, is actually the first usage of the variable ``$x``. Hence, the error message.

See Also
________

* `Undefined variable in action <https://3v4l.org/3ifYo>`_ [Try me]


PHP Error Messages
__________________

* `Undefined variable <https://php-errors.readthedocs.io/en/latest/messages/undefined-variable.html>`_



PHP Features
____________

* `variable <https://php-dictionary.readthedocs.io/en/latest/dictionary/variable.ini.html>`_

* `order-of-execution <https://php-dictionary.readthedocs.io/en/latest/dictionary/order-of-execution.ini.html>`_


