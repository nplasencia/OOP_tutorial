# Notes of this lesson

__Inheritance__ is one of the most used features in OOP. With it, we can share methods and properties between classes and do not repeat them. allows us to define a class in terms of another class, which makes it easier to create and maintain an application. We can _extend_ from a parent class all his public and protected methods and properties.

_Method overriding_: Inheritance not only adds all public and protected methods of the superclass to your subclass, but it also allows you to replace their implementation. The method of the subclass then overrides the one of the superclass. That mechanism is called _polymorphism_. 

__Abstraction__ is another of the most important features in OOP. An abstract class does not represent something specific and we can use it to create a _concrete_ class.

An abstract class can not be instantiated and can contain abstract methods. This means that the concrete class who inherits from an abstract class has to define every parent's abstract method.