<?php
/*

1) What Is Object Oriented Programming? 
ans. Object-oriented programming (OOP) is a programming paradigm centered around the concept of "objects." An object can be thought of as a self-contained unit that consists of both data (attributes or properties) and functions (methods or procedures) that operate on the data.

2) What Are Properties Of Object Oriented Systems? 
ans.1)Encapsulation
    2)Abstraction
    3)Inheritance
    4)Polymorphism
    
3) What Is Difference Between Class And Interface? 
ans. 
Class:
-> A class is a blueprint or a template that defines the properties (attributes or fields) and behaviors (methods or functions) of objects.
-> It can contain constructors, methods, fields, and other members.
-> Objects are created from classes, representing specific instances that possess the characteristics defined in the class.
-> Classes can provide concrete implementations for methods.

Interface:

-> An interface is a contract that defines a set of methods that a class must implement. It contains method signatures but does not provide the implementation of these methods.
-> It only defines the structure or "what" needs to be done without specifying "how" it should be done.
-> Classes can implement multiple interfaces, enabling them to provide implementations for all the methods defined in those interfaces.
-> Interfaces support the concept of multiple inheritance, allowing a class to inherit behaviors from multiple sources.

4) What Is Overloading? 
ans.Function overloading is a concept in programming that allows creating multiple functions with the same name but with different parameter lists or types within the same scope. The idea is that these functions perform different operations based on the parameters they receive.

Method Overloading (applicable in languages like Java, C++, etc.):

5) What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with
Example.
ans. class MyClass {
    const MY_CONSTANT = 10;
    public static $staticVar = 20;

    public static function myStaticMethod() {
        return "Hello, static method!";
    }
}

echo MyClass::MY_CONSTANT; 
echo MyClass::$staticVar; 
echo MyClass::myStaticMethod(); 

6) What are the differences between abstract classes and interfaces? 
ans. 

Abstract Class: 
-> An abstract class is a class that cannot be instantiated on its own and may contain abstract methods (methods without implementation) alongside concrete methods (methods with implementation).
-> Abstract Class: In many programming languages (like Java), a class can extend only one abstract class, limiting the flexibility in inheritance.

Interface: 
-> An interface is a collection of method signatures that a class can choose to implement. It contains no method implementations; it only defines the structure of methods.
-> Interface: A class can implement multiple interfaces, allowing for a form of multiple inheritance where a class can inherit behaviors from multiple sources.

7) Define Constructor and Destructor? 
ans.

Constructor:
-> A constructor is a special method within a class that gets called automatically when an object of that class is created.
-> Its primary purpose is to initialize the object's state, set up initial values for its attributes, and perform any necessary setup or allocation of resources.
-> In many programming languages (such as Java, C++, Python), the constructor has the same name as the class itself.
-> Constructors can be parameterized (accept arguments) or default (no arguments), allowing for different ways to initialize objects.
-> In object-oriented programming, constructors ensure that an object starts with a valid state and is ready to be used.

Destructor:

-> A destructor is a special method (not present in all programming languages, unlike constructors) that's called when an object is destroyed or goes out of scope.
-> Its purpose is to clean up resources, release memory, or perform any necessary cleanup operations before the object is removed from memory.
-> In languages like C++, a destructor is invoked explicitly when an object is no longer needed, typically using the delete keyword or when an object goes out of scope.

8) How to Load Classes in PHP? 
ans. 

require 'path/to/classes/Class.php';

$obj = new Class();

9) How to Call Parent Constructor? 
ans. 
class ParentClass {
    public function __construct() {
        echo "Parent constructor called.<br>";
    }
}

class ChildClass extends ParentClass {
    public function __construct() {
        parent::__construct(); 
        echo "Child constructor called.<br>";
    }
}

$obj = new ChildClass();

10) Are Parent Constructor Called Implicitly When Create An ObjectOf Class? 
ans. 
class ParentClass {
    public function __construct() {
        echo "Parent constructor called.<br>";
    }
}

class ChildClass extends ParentClass {
    public function __construct() {
        echo "Child constructor called.<br>";
    }
}

$obj = new ChildClass();

11) What Happen, If Constructor Is Defined As Private Or Protected?
ans. 
Private Constructor:
class Example {
    private function __construct() {
    }
}
$obj = new Example(); 

Protected Constructor:
class Example {
    protected function __construct() {
    }
}
$obj = new Example(); 

12) What are PHP Magic Methods/Functions? List them Write program for Static
Keyword in PHP? 
ans. PHP magic methods, also known as magic functions, are special methods that start with a double underscore __. These methods are predefined in PHP and are invoked automatically based on certain actions or events within an object. They allow you to implement functionality that handles various operations in a class.

class Example {
    public static $count = 0;
    public function __construct() {
        self::$count++; 
    }

    public static function getCount() {
        return self::$count; 
    }
}

// Creating objects
$obj1 = new Example();
$obj2 = new Example();
$obj3 = new Example();

echo "Number of instances created: " . Example::getCount();

13) Create multiple Traits and use it in to a single class? 
ans. 
// Define multiple traits
trait Greeting {
    public function sayHello() {
        echo "Hello! ";
    }
}

trait Farewell {
    public function sayGoodbye() {
        echo "Goodbye!";
    }
}

trait Emotions {
    public function expressEmotion($emotion) {
        echo "I am feeling $emotion.";
    }
}

// Combine traits in a class
class MyClass {
    use Greeting, Farewell, Emotions;

    public function performActions() {
        $this->sayHello();
        $this->expressEmotion("happy");
        $this->sayGoodbye();
    }
}

// Create an object of MyClass
$obj = new MyClass();
$obj->performActions(); // Output: Hello! I am feeling happy. Goodbye!

14) Write PHP Script of Object Iteration? 
ans. 
class MyClass {
    public $name = 'John';
    public $age = 30;
    protected $email = 'john@example.com';
    private $password = 'secret123';
}

$obj = new MyClass();

// Iterate through object properties
foreach ($obj as $key => $value) {
    echo "$key: $value <br>";
}

15) Use of The $this keyword.
ans. 
class MyClass {
    public $name;

    public function setName($name) {
        $this->name = $name; // Assign value to the object's property
    }
}

16) 


?>