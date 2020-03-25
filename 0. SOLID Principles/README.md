# SOLID Principles

## 1. Single Responsibility Principle

>A class should have one, and only one, reason to change.

One class should only serve one purpose, this does not imply that each class should have only one method but they should all relate directly to the responsibility of the class. All the methods and properties should all work towards the same goal. When a class serves multiple purposes or responsibility then it should be made into a new class.
 
## 2. Open-closed Principle

>Entities should be open for extension, but closed for modification.

Software entities (classes, modules, functions, etc.) be extendable without actually changing the contents of the class you're extending. If we could follow this principle strongly enough, it is possible to then modify the behavior of our code without ever touching a piece of original code.

## 3. Liskov Substitution Principle

>Subclass/derived class should be substitutable for their base/parent class.

It states that any implementation of an abstraction or interface should be substitutable in any place that the abstraction is accepted. Basically, it takes care that while coding using interfaces in our code, we not only have a contract of input that the interface receives but also the output returned by different Classes implementing that interface; they should be of the same type.

## 4. Interface Segregation Principle

>A Client should not be forced to implement an interface that it doesn't use.
 
This principle means that we should break our interfaces in many smaller ones, so they better satisfy the exact needs of our clients.
 
Similar to the Single Responsibility Principle, the goal of the Interface Segregation Principle is to minimize the side consequences and repetition by dividing the software into multiple, independent parts.

## 5. Dependency Inversion Principle

>High-level modules should not depend on low-level modules. Both should depend on abstractions.
 
>Abstractions should not depend on details. Details should depend on abstractions.

Or simply : Depend on Abstractions not on concretions

By applying the Dependency Inversion the modules can be easily changed by other modules just changing the dependency module and High-level module will not be affected by any changes to the Low-level module.

