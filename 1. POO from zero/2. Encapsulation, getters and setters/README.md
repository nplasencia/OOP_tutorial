# Notes of this lesson

__Encapsulation__ is one of the most important features in POO. With encapsulation we can protect and hide information, preventing any unexpected change.

Every property inside a class could be _public_, _private_ or _protected_.
  
- **Public:** We can access to this property and modify it from the outside of the class.
- **Protected or private:** We can access to this property only inside the class (The difference between them will be explain in the next lesson).

If we have protected or private properties, we can allow access to them creating _getters_ or _setters_ for them. Remember that, if you create a getter and a setter for a protected/private property and you don't add any logic to them, it is the same as declare that property as public.
