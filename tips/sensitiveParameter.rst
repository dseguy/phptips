.. _hide-sensitive-parameter:

Hide Sensitive Parameter
------------------------

.. meta::
	:description:
		Hide Sensitive Parameter: PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hide Sensitive Parameter
	:twitter:description: Hide Sensitive Parameter: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/sensitiveParameter.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/sensitiveParameter.png
	:og:title: Hide Sensitive Parameter
	:og:type: article
	:og:description: PHP 8
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/sensitiveParameter.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sensitiveParameter.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sensitiveParameter.html","name":"Hide Sensitive Parameter","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:52:45+00:00","dateModified":"2026-07-14T14:52:45+00:00","description":"PHP 8","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sensitiveParameter.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   function secret($key, #[\SensitiveParameter] string $key2, $otherKey) {
       throw new Exception('');
   }
   
   $key = '123';
   print secret(
       $key,                              // plain visible
       $key,                              // hidden by the method
       new SensitiveParameterValue($key)  // hidden by the caller
   );
   
   ?>


PHP 8.2 introduces the ``#[SensitiveParameter]`` attribute to hide sensitive values from debug messages when used on function parameters. Additionally, the ``SensitiveParameterValue`` class allows you to mark data as sensitive at the caller level, ensuring it won’t appear in stack traces. To retrieve the original value when needed, simply call the ``$object->getValue()`` method.

See Also
________

* `SensitiveParameter (PHP manual) <https://www.php.net/manual/en/class.sensitiveparameter.php>`_
* `SensitiveParameterValue (PHP manual) <https://www.php.net/manual/en/class.sensitiveparametervalue.php>`_
* `Hide sensitive parameters <https://3v4l.org/dEPeZ>`_ [Try me]


PHP Features
____________

* `attribute <https://php-dictionary.readthedocs.io/en/latest/dictionary/attribute.ini.html>`_

* `secret <https://php-dictionary.readthedocs.io/en/latest/dictionary/secret.ini.html>`_



Last updated: 14 July 2026