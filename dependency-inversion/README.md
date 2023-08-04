### Principio *Dependency Inversion*
El Principio de Inversión de Dependencias (Dependency Inversion Principle, DIP) es uno de los cinco principios SOLID en la programación orientada a objetos. Este principio establece que los módulos de alto nivel no deben depender de los módulos de bajo nivel. Ambos deben depender de abstracciones. Además, las abstracciones no deben depender de los detalles; los detalles deben depender de las abstracciones.

En términos más técnicos, este principio busca desacoplar el código al hacer que tanto las clases de alto nivel (las que contienen la lógica de negocio) como las clases de bajo nivel (las que realizan operaciones más detalladas, como la lectura/escritura en la base de datos) dependan de interfaces o abstracciones, en lugar de que las clases de alto nivel dependan directamente de las clases de bajo nivel.

El objetivo de este principio es reducir la dependencia directa entre los componentes del software, lo que facilita la prueba, el mantenimiento y la reutilización del código. Esto permite, por ejemplo, cambiar una implementación de bajo nivel (como un servicio de base de datos) sin tener que cambiar el código en los módulos de alto nivel que la utilizan.

En definitiva, este principio nos dice que **debemos depender en abstracciones y no en concreciones para evitar atar unas clases con otras**.

En el ejemplo de este ejercicio, vemos cómo no "atar" el método *sendNewUserEmail()* sólo a objetos User, sino que también pueda usarse con objetos Admin, por ejemplo.

### Violación del principio *Dependency Inversion*

