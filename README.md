# Design Patterns

## OOP Concepts
1. **Abstraction**
   - is the concept of hiding the implementation and un-necessary details or data from the user.
   - It's the process of hiding complexity and focusing on what functionalities are available to use.
   - Can be done using abstract classes and interfaces.
   - You can achieve the SRP as you separate all data and its responsibilities in different entities.
2. **Encapsulation**
   - is the concept of wrapping data and code as single unit.

    | Abstraction                                                                | Encapsulation                                                                                        |
    |----------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------|
    | solves the issues at the design level.                                     | solves it in the implementation level                                                                |
    | is about hiding unwanted details while showing most essential information. | means binding the code and data into a single unit.                                                  |
    | allows focusing on what the information object must contain.               | means hiding the internal details or mechanics of how an object does something for security reasons. |
3. **Inheritance**
   - is the concept in which one object acquires/inherits all the properties and behaviors of a parent object.
   - Code to an abstraction/interface rather than a concrete class (avoid loosely coupled classes).
   - Favor composition over inheritance.
4. **Polymorphism**
   - is the concept by which we can perform a single action in different ways.
   - is derived from 2 Greek words:
     - **poly** means many,
     - and **morphs** means forms.
   - so, polymorphism means many forms.
   - has 2 types:
     - static.
     - dynamic.

## OOP Relationships
1. Association
   - defines a relationship between classes of objects that allows one object instance to cause another to perform an action on its behalf.
2. Aggregation
   - is a weak type of association that represents the relationship between an owner (whole) object and its aggregated (parts) collection of objects in a way that doesn't affect the life cycle of the parts objects if the owner is destroyed.
3. Composition
   - is a strong type of association, and it's also called **death** relationship.
   - represents an owner object that own another object as part of it.
   - This type of relationship controls the life cycle of the owned object in a way that if the owner is destroyed then the owned object is destroyed too.

- ![Relationships](relationships.jpg)

- Inheritance IS-A
  - Manager IS-A Employee
- Aggregation HAS-A
  - Project HAS-A Developer
- Composition PART-OF
  - Room PART-OF House
  - CPU PART-OF ComputerMachine

## Design Patterns: Creational Design Patterns
- In software engineering, creational design patterns are patterns that deal with object creation mechanisms, trying to create objects in a manner suitable to the situation.
- Creational design patterns are composed of two dominant ideas.
  - One is encapsulating knowledge about which concrete classes the system uses.
  - Another is hiding how instances of these concrete classes are created and combined.

### Factory Method Design Pattern
- **Intention:** 
  - Define an interface for creating an object, but let subclasses decide which class to instantiate.
  - Factory Method lets a class defer instantiation to subclasses.
- **Also known as:** Virtual Constructor.
- **Example:** Dialog, Content validator.

### Builder Design Pattern
- **Intention:**
  - Separate the construction of a complex object from its representation so that the same construction process can create different representation.
- **Example:** Computer, Response Interface (real world scenario).

### Prototype Design Pattern
- **Intention:**
  - Specify the kinds of objects to create using a prototypical instance, and create new objects by copying this prototype.
- **Example:** EmployeePrototype (real world scenario)

### Abstract Factory Design Pattern
- **Intention:**
  - Provide an interface for creating families of related or dependent objects without specifying their concrete classes.
- **Example:** Form Abstract Factory
