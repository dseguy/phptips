.. _replacing-php-http-wrapper:

Replacing PHP http Wrapper
--------------------------

.. meta::
	:description:
		Replacing PHP http Wrapper: Did you know you can override built-in protocols such as https://.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Replacing PHP http Wrapper
	:twitter:description: Replacing PHP http Wrapper: Did you know you can override built-in protocols such as https://
	:twitter:creator: @exakat
	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/http_wrapper.png
	:og:image: https://php-tips.readthedocs.io/en/latest/_images/http_wrapper.png
	:og:title: Replacing PHP http Wrapper
	:og:type: article
	:og:description: Did you know you can override built-in protocols such as https://
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/http_wrapper.html
	:og:locale: en

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"TechArticle","@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/http_wrapper.html","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/http_wrapper.html","name":"Replacing PHP http Wrapper","isPartOf":{"@id":"https:\/\/php-tips.readthedocs.io\/en\/latest\/"},"datePublished":"2026-07-14T14:31:52+00:00","dateModified":"2026-07-14T14:31:52+00:00","description":"Did you know you can override built-in protocols such as https:\/\/","inLanguage":"en-US","author":{"@id":"https:\/\/x.com\/alexdaubois"},"potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/http_wrapper.html"]}]},{"@type":"Person","@id":"https:\/\/x.com\/alexdaubois","name":"Alexandre Daubois","url":"https:\/\/x.com\/alexdaubois","sameAs":["https:\/\/x.com\/alexdaubois"]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

By `Alexandre Daubois <https://x.com/alexdaubois>`_

.. code-block:: php

   <?php
   
   // based on Alexandre Daubois code
   // Refactored to make it running here 
   
   class MockHttp
   {
       private string $data = '';
       private int $pos = 0;
       public $context;
   
       public function stream_open(
           string $path,
           string $mode,
           int $options,
           ?string &$opened_path = null
       ): bool {
           $this->data = json_encode([
               'mocked' => true,
               'url'    => $path,
           ]);
   
           $this->pos = 0;
   
           return true;
       }
   
       public function stream_read(int $count): string
       {
           $result = substr($this->data, $this->pos, $count);
           $this->pos += strlen($result);
   
           return $result;
       }
   
       public function stream_eof(): bool
       {
           return $this->pos >= strlen($this->data);
       }
   
       public function stream_stat(): array
       {
           return [
               'size' => strlen($this->data),
           ];
       }
   
       // Required when using STREAM_IS_URL in modern PHP versions
       public function url_stat(string $path, int $flags): array|false
       {
           return [
               'size' => strlen($this->data),
           ];
       }
   }
   
   stream_wrapper_unregister('http');
   stream_wrapper_register('http', MockHttp::class, STREAM_IS_URL);
   
   $data = file_get_contents('http://api.example.com/users');
   
   var_dump($data);
   
   stream_wrapper_restore('http');


Did you know you can override built-in protocols such as https://?

You can create mocks! I'd advise to use dedicated tools such as #Symfony MockHttpClient. But in the case of vanilla PHP...

I'll let you tell me if it's a good or a terrible idea 😉.

See Also
________

* `original tweet <https://x.com/alexdaubois/status/2026210142677598565>`_
* `http wrapper renewed <https://3v4l.org/RH2uq#veol>`_ [Try me]


PHP Features
____________

* `wrapper <https://php-dictionary.readthedocs.io/en/latest/dictionary/wrapper.ini.html>`_

* `php-wrapper <https://php-dictionary.readthedocs.io/en/latest/dictionary/php-wrapper.ini.html>`_



Last updated: 14 July 2026