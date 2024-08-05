.. _send-an-argument-to-generator:

Send An Argument To Generator
-----------------------------

	.. meta::
		:description lang=en:
			Send An Argument To Generator: When calling the method send() on a PHP generator, the result of the first yield keyword is the argument value.

By `Rahul Chavan <https://twitter.com/rcsofttech85>`_

When calling the method send() on a PHP generator, the result of the first yield keyword is the argument value. Then, it can be used to yield a specific result.

Upon usage on a foreach(), that generator will generate 2 values.

Generator::send() only accepts one argument.

.. image:: ../images/send_to_generator.png

* `example on 3v4l.org <https://3v4l.org/ouPhi>`_
* `Generator::send() <https://www.php.net/manual/en/generator.send.php>`_


