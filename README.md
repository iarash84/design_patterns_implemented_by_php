# Design patterns implemented in Php
Introduction
=================

Design patterns are solutions to recurring problems; **guidelines on how to tackle certain problems**. They are not classes, packages or libraries that you can plug into your application and wait for the magic to happen. These are, rather, guidelines on how to tackle certain problems in certain situations.

> Design patterns are solutions to recurring problems; guidelines on how to tackle certain problems

Wikipedia describes them as

> In software engineering, a software design pattern is a general reusable solution to a commonly occurring problem within a given context in software design. It is not a finished design that can be transformed directly into source or machine code. It is a description or template for how to solve a problem that can be used in many different situations

Types of Design Patterns
-----------------

* Behavioral
* Creational
* Structural

__Behavioral Patterns__:

In plain words
> Structural patterns are mostly concerned with object composition or in other words how the entities can use each other. Or yet another explanation would be, they help in answering "How to build a software component?"

Wikipedia says
> In software engineering, structural design patterns are design patterns that ease the design by identifying a simple way to realize relationships between entities.

| Pattern | Description | Wiki |
|:-------:| ----------- | :---: |
| [Chain](Behavioral/ChainOfResponsibilities.php) | apply a chain of successive handlers to try and process the data |[wiki](http://en.wikipedia.org/wiki/Chain_of_responsibility_pattern) |
| [Command](Behavioral/Command.php) | bundle a command and arguments to call later |[wiki](http://en.wikipedia.org/wiki/Command_pattern) |
| [Iterator](Behavioral/Iterator.php) | traverse a container and access the container's elements |[wiki](http://en.wikipedia.org/wiki/Iterator_pattern) |
| [Memento](Behavioral/Memento.php) | generate an opaque token that can be used to go back to a previous state |[wiki](http://en.wikipedia.org/wiki/Memento_pattern) |
| [Observer](Behavioral/Observer.php) | provide a callback for notification of events/changes to data |[wiki](http://en.wikipedia.org/wiki/Observer_pattern) |
| [Registry](Behavioral/Registry.php) | keep track of all subclasses of a given class |[wiki](http://en.wikipedia.org/wiki/Service_locator_pattern) |
| [Strategy](Behavioral/Strategy.php) | selectable operations over the same data |[wiki](http://en.wikipedia.org/wiki/Strategy_pattern) |
| [Visitor](Behavioral/Visitor.php) | invoke a callback for all items of a collection |[wiki](http://en.wikipedia.org/wiki/Visitor_pattern) |

__Creational Patterns__:

In plain words
> Creational patterns are focused towards how to instantiate an object or group of related objects.

Wikipedia says
> In software engineering, creational design patterns are design patterns that deal with object creation mechanisms, trying to create objects in a manner suitable to the situation. The basic form of object creation could result in design problems or added complexity to the design. Creational design patterns solve this problem by somehow controlling this object creation.


| Pattern | Description | Wiki |
|:-------:| ----------- | :---: |
| [Abstract Factory](Creational/AbstractFactory.php) | use a generic function with specific factories | [wiki](http://en.wikipedia.org/wiki/Abstract_factory_pattern) |
| [Builder](Creational/Builder.php) | instead of using multiple constructors, builder object receives parameters and returns constructed objects |[wiki](http://en.wikipedia.org/wiki/Builder_pattern) |
| [FactoryMethod](Creational/FactoryMethod.php) | delegate a specialized function/method to create instances |[wiki](http://en.wikipedia.org/wiki/Factory_method_pattern) |
| [Pool](Creational/Pool.php) | preinstantiate and maintain a group of instances of the same type |[wiki](http://en.wikipedia.org/wiki/Object_pool_pattern) |
| [Prototype](Creational/Prototype.php) | use a factory and clones of a prototype for new instances (if instantiation is expensive) |[wiki](http://en.wikipedia.org/wiki/Prototype_pattern) |
| [Singleton](Creational/Singleton.php) | To have only one instance of this object in the application that will handle all calls. | [wiki](http://en.wikipedia.org/wiki/Singleton_pattern) |

__Structural Patterns__:

In plain words
> Structural patterns are mostly concerned with object composition or in other words how the entities can use each other. Or yet another explanation would be, they help in answering "How to build a software component?"

Wikipedia says
> In software engineering, structural design patterns are design patterns that ease the design by identifying a simple way to realize relationships between entities.

| Pattern | Description | Wiki |
|:-------:| ----------- | :---: |
| [Adapter](Structural/Adapter.php) | adapt one interface to another using a white-list |[wiki](http://en.wikipedia.org/wiki/Adapter_pattern) |
| [Bridge](Structural/Bridge.php) | a client-provider middleman to soften interface changes |[wiki](http://en.wikipedia.org/wiki/Bridge_pattern) |
| [Composite](Structural/Composite.php) | lets clients treat individual objects and compositions uniformly |[wiki](http://en.wikipedia.org/wiki/Composite_pattern) |
| [Decorator](Structural/Decorator.php) | wrap functionality with other functionality in order to affect outputs |[wiki](http://en.wikipedia.org/wiki/Decorator_pattern) |
| [Facade](Structural/Facade.php) | use one class as an API to a number of others |[wiki](http://en.wikipedia.org/wiki/Facade_pattern) |
| [Flyweight](Structural/Flyweight.php) | transparently reuse existing instances of objects with similar/identical state |[wiki](https://en.wikipedia.org/wiki/Flyweight_pattern) |
| [Proxy](structural/Proxy.php) | an object funnels operations to something else |[wiki](http://en.wikipedia.org/wiki/Proxy_pattern) |

# License

This project is licensed under the terms of the MIT license.


