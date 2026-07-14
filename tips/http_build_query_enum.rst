.. _http_build_query-and-enumerations:

http_build_query() And Enumerations
-----------------------------------

.. meta::
	:description:
		http_build_query() And Enumerations: When using a backed enum with http_build_query(), the PHP native function uses the value of the case, and not the case itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: http_build_query() And Enumerations
	:twitter:description: http_build_query() And Enumerations: When using a backed enum with http_build_query(), the PHP native function uses the value of the case, and not the case itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/http_build_query_enum.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/http_build_query_enum.png
	:og:title: http_build_query() And Enumerations
	:og:type: article
	:og:description: When using a backed enum with http_build_query(), the PHP native function uses the value of the case, and not the case itself
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/http_build_query_enum.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/http_build_query_enum.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/http_build_query_enum.html","name":"http_build_query() And Enumerations","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:52+00:00","dateModified":"2026-07-14T14:31:52+00:00","description":"When using a backed enum with http_build_query(), the PHP native function uses the value of the case, and not the case itself","inLanguage":"en-US","author":{"@id":"https:\/\/www.exakat.io\/#damien-seguy"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/http_build_query_enum.html"]}]},{"@type":"Person","@id":"https:\/\/www.exakat.io\/#damien-seguy","name":"Damien Seguy","url":"https:\/\/www.exakat.io\/#damien-seguy","sameAs":["https:\/\/x.com\/exakat","https:\/\/www.linkedin.com\/in\/damienseguy"],"worksFor":{"@type":"Organization","@id":"https:\/\/www.exakat.io\/","name":"Exakat"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

.. code-block:: php

   <?php
   
   enum e : string {
       case A = 'a';
   }
   
   print http_build_query(['a' => 'A', 'b' => e::A]);
   
   // PHP 8.4 and more recent : a=A&b=a
   
   // Pre PHP 8.4 : a=A&b%5Bname%5D=A&b%5Bvalue%5D=a  a=A&b[name]=A&b[value]='a'


When using a backed enum with http_build_query(), the PHP native function uses the value of the case, and not the case itself. This is very convenient to output a compatible value, instead of an internal object. This is valid since PHP 8.4.

See Also
________

* `http_build_query and enum <https://3v4l.org/0mWQs>`_ [Try me]


PHP Features
____________

* `enum <https://php-dictionary.readthedocs.io/en/latest/dictionary/enum.ini.html>`_

* `http_build_query <https://php-dictionary.readthedocs.io/en/latest/dictionary/http_build_query.ini.html>`_



Last updated: 14 July 2026