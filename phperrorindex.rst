Error Message index
-------------------

* Cannot access offset of type A on array
    * :ref:`no-force-object-to-string`
* Cannot assign %s to reference held by property %s::$%s of type %s
    * :ref:`typed-variables`
* Cannot call constructor
    * :ref:`constructor-needed`
* Cannot declare self-referencing constant x::A
    * :ref:`no-self-referencing-constants`
* Cannot indirectly modify readonly property %s::$%s
    * :ref:`cannot-indirectly-modify-readonly`
* Cannot rebind scope of closure created from method
    * :ref:`no-binding-but-with-original`
* Cannot unpack array with string keys
    * :ref:`named-parameter-in-an-array`
* Cannot use 'namespace' as namespace name
    * :ref:`namespace,-but-far-in-the-name`
* Cannot use [] for reading
    * :ref:`array_append()-and-short-assignation`
* Cannot use isset() on the result of an expression (you can use "null !== expression" instead)
    * :ref:`cannot-use-isset-on-expression,-so-use-what?`
* Cannot use the %s modifier on a %s
    * :ref:`no-final-parameter`
* Class "%s" not found
    * :ref:`unfinished-class-doesn't-compile`
* Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods
    * :ref:`declared-before-or-after`
* Constant expression contains invalid operations
    * :ref:`no-cast-in-constant-expressions`
* Duplicate value in enum E for cases A and B
    * :ref:`enum-are-not-linted`
* Incompatible readonly
    * :ref:`incompatible-promoted-readonlies`
* Multiple static modifiers are not allowed
    * :ref:`cannot-static-static-property`
* Recursion detected
    * :ref:`compact()-is-recursive`
* Trying to access array offset on false
    * :ref:`null-or-boolean-as-array`
* Trying to access array offset on null
    * :ref:`null-or-boolean-as-array`
* Trying to access array offset on true
    * :ref:`null-or-boolean-as-array`
* Typed property %s::$%s must not be accessed before initialization
    * :ref:`mixed-is-not-no-type`
    * :ref:`initialize-readonly-on-child`
    * :ref:`unsetting-properties-surprises`
* Typed property x::$y must not be accessed before initialization
    * :ref:`who-modifies-this-property?`
* Undefined global variable %s
    * :ref:`$globals-is-not-defined`
* Undefined property
    * :ref:`unsetting-properties-surprises`
* Undefined variable
    * :ref:`undefined-variable`
* Unhandled case NULL
    * :ref:`non-empty-match`
* Unsupported operand types: int & string
    * :ref:`bitwise-operations-on-string`
* array_merge() does not accept unknown named parameters
    * :ref:`no-unknown-for-array_merge()`
* syntax error, unexpected token "(int)"
    * :ref:`cast-is-so-strong`
* syntax error, unexpected token ";"
    * :ref:`where-is-the-semicolon?`
    * :ref:`no-semicolon-in-sight`
