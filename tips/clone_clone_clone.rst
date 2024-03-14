.. _clone-clone-clone:

Clone Clone Clone
-----------------

	.. meta::
		:description lang=en:
			Clone Clone Clone: It is possible to chain clone operators : PHP optimize this and skips any intermediate clone.

It is possible to chain clone operators : PHP optimize this and skips any intermediate clone. The resulting final object is number 2, so the inner clones were duly ignored. 

On the other hand, it is possible to create a new object from an existing object, but it is not possible to chain the new calls without using parenthesis.

.. image:: ../images/clone_clone_clone.png

* `Cloning objects <https://www.php.net/manual/en/language.oop5.cloning.php>`_
* `new <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new>`_


