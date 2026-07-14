.. _property-hooks-and-default-values:

Property Hooks And Default Values
---------------------------------

.. meta::
	:description:
		Property Hooks And Default Values: PHP property hooks.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property Hooks And Default Values
	:twitter:description: Property Hooks And Default Values: PHP property hooks
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/property_hook_default_values.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/property_hook_default_values.png
	:og:title: Property Hooks And Default Values
	:og:type: article
	:og:description: PHP property hooks
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/property_hook_default_values.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property_hook_default_values.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property_hook_default_values.html","name":"Property Hooks And Default Values","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:33:04+00:00","dateModified":"2026-07-14T14:33:04+00:00","description":"PHP property hooks","inLanguage":"en-US","author":{"@id":"https:\/\/janedbal.cz\/"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property_hook_default_values.html"]}]},{"@type":"Person","@id":"https:\/\/janedbal.cz\/","name":"Jan Nedbal","url":"https:\/\/janedbal.cz\/","sameAs":["https:\/\/janedbal.cz\/"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Jan Nedbal <https://janedbal.cz/>`_

.. code-block:: php

   <?php declare(strict_types = 1);
   
   class Example1
   {
       public string $foo = 'UPPERCASE' {
           set => strtolower($value);
       }
   }
   
   class Example2
   {
       public function __construct(
           public string $foo = 'UPPERCASE' {
               set => strtolower($value);
           }
       ) {
       }
   }
   
   echo new Example1()->foo;
   echo new Example2()->foo;


PHP property hooks

Would you expect equal behaviour?

[Added answer] The default value on the property hook is used when the hook is called. At creation time, no hook is called to initialize the property. So, there is no default value for properties with a property hook, unless the ``set`` hook is configured to return something.

See Also
________

* `Original tweet about property hooks <https://x.com/janedbal>`_
* `Default values on Property Hooks <https://3v4l.org/t80RS#v8.4.15>`_ [Try me]


PHP Features
____________

* `property-hook <https://php-dictionary.readthedocs.io/en/latest/dictionary/property-hook.ini.html>`_

* `default <https://php-dictionary.readthedocs.io/en/latest/dictionary/default.ini.html>`_



Last updated: 14 July 2026