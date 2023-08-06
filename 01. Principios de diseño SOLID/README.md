#### Principios de diseño SOLID
Los principios SOLID son un conjunto de directrices en la programación orientada a objetos diseñados para hacer que el software sea más comprensible, flexible y mantenible. Los cinco principios SOLID son:

1. Principio ***Single Responsibility*** (SRP): Una clase debe tener solo una razón para cambiar, es decir, solo debe tener una única responsabilidad.

2. Principio ***Open/Closed*** (OCP): Las entidades de software (clases, módulos, funciones, etc.) deben estar abiertas para la extensión, pero cerradas para la modificación. Es decir, debes poder agregar nuevas funcionalidades a una entidad sin modificar su código existente.

3. Principio ***Liskov Substitution*** (LSP): Las subclases deben ser sustituibles por sus clases base sin causar problemas. Es decir, si una clase B es una subclase de la clase A, entonces deberíamos poder reemplazar A con B sin alterar la correctitud del programa.

4. Principio ***Interface Segregation*** (ISP): Los clientes no deben ser forzados a depender de interfaces que no utilizan. En otras palabras, es mejor tener muchas interfaces específicas en lugar de una única interfaz general.

5. Principio ***Dependency Inversion*** (DIP): Los módulos de alto nivel no deben depender de los módulos de bajo nivel. Ambos deben depender de abstracciones. Además, las abstracciones no deben depender de los detalles; los detalles deben depender de las abstracciones. Esto permite desacoplar el código y facilitar la prueba y el mantenimiento.
