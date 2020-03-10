# Notes of this lesson

## Facades

El uso de métodos estáticos es muy sencillo puesto que nos permite invocar a un método en cualquier lugar de nuestro sistema, sin tener que preocuparnos por inyectar dependencias y ni siquiera por crear una nueva instancia de una clase. Pero esta facilidad de uso viene con un costo: terminamos con un sistema menos flexible y más acoplado. Aquí es donde entra el concepto de facades en PHP, ideado por Taylor Otwell para Laravel 4, las cuáles son el punto intermedio entre una buena arquitectura y una interfaz fácil de usar como aprenderás en esta lección.

Using __facades__ we have the best of this two worlds: dependency inyection and static methods. For that, we have a flexible implementation.
