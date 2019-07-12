Variables that are passed by reference can be hard for static analysis tools to reason about.

```php
<?php
function bar(string &$s) {  
  $s = new \stdClass(); // typechecker error  
}

$a = "hello";  
bar($a);  
echo strlen($a); // runtime error, no typechecker error
```

Psalm’s existing handling of this pattern was to complain inside the function `bar()` that you were violating the type constraint that `$s` should be a string.

You can now use a `@param-out` annotation to tell Psalm that you _intend_ for the function to behave that way:

```php
<?php
/**  
 * @param-out \stdClass $s  
 */  
function bar(string &$s) {  
  $s = new \stdClass(); // no error  
}

$a = "hello";  
bar($a);  
echo strlen($a); // typechecker error
```

Psalm can now automatically remove unused methods and properties:

```php
<?php
class Queue {
  public function clear() : void {}
  public function clearLegacy() : void {}
}

(new Queue())->clear();
```

[Fix](#fix-code)

I’ve given Psalter a new skill - the ability to add missing param types to methods based on how they’re used in your codebase, so if you only call a method with a string as its first argument, Psalm will add a `@param string $someParamName` to that method’s docblock.

```php
<?php
class A {
  public function($foo) : void {
    echo $foo;
  }
}

(new A)->foo("hello");
```

[Fix](#fix-code)