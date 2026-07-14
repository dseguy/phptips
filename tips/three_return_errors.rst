.. _three-return-errors:

Three Return Errors
-------------------

.. meta::
	:description:
		Three Return Errors: There are three errors in this code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Three Return Errors
	:twitter:description: Three Return Errors: There are three errors in this code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/three_return_errors.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/three_return_errors.png
	:og:title: Three Return Errors
	:og:type: article
	:og:description: There are three errors in this code
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/three_return_errors.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/three_return_errors.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/three_return_errors.html","name":"Three Return Errors","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 14:33:42 +0000","dateModified":"Tue, 14 Jul 2026 14:33:42 +0000","description":"There are three errors in this code","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/three_return_errors.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   interface I {
       function foo(): A; 
   }
   
   class X implements i {
   
       function foo() : A {
           // return type is not useful here
           throw new Exception('');
       
           // PHP complains that a value must be returned
           return;
       
           // PHP won't complain until execution time
           return 1;
       }
   }


There are three errors in this code.

The first is the first return: PHP linter complains that ``A function with return type must return a value``. That is true, but with the initial ``throw``, the returns won't be ever reached. And removing empty returns is sufficient to appease the linter.

Indeed, the second return pass linting phase, and it is bound to fail at execution time. It is obvious that returning ``1`` instead of ``A`` will fail, but the code could have been returning a variable, whose type could not have been checked. So, PHP left all the checks aside.

Finally, the last wrong part of this code is the return type: the exception makes it irrelevant, and, even in the case of a method, it could have been replaced by the ``never`` type, which is covariant with every other type. At that point, PHP complains that the method cannot return.

Definitely, this code doesn't want to work.

See Also
________

* `Three Errors in One Method <https://3v4l.org/Ic9jV#v8.5.6>`_ [Try me]


PHP Error Messages
__________________

* `A function with return type must return a value <https://php-errors.readthedocs.io/en/latest/messages/a-function-with-return-type-must-return-a-value.html>`_

* `A never-returning method must not return <https://php-errors.readthedocs.io/en/latest/messages/a-never-returning-method-must-not-return.html>`_



PHP Features
____________

* `throw <https://php-dictionary.readthedocs.io/en/latest/dictionary/throw.ini.html>`_

* `return <https://php-dictionary.readthedocs.io/en/latest/dictionary/return.ini.html>`_

* `never <https://php-dictionary.readthedocs.io/en/latest/dictionary/never.ini.html>`_


