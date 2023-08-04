### Principio *Liskov Substitution*
El Principio de Sustitución de Liskov (Liskov Substitution Principle, LSP) es uno de los cinco principios del SOLID en programación orientada a objetos. Este principio establece que las clases derivadas deben ser capaces de sustituir a las clases base sin alterar la correctitud del programa.

En términos más técnicos, si una clase B es una subclase de la clase A, entonces deberíamos poder reemplazar cualquier instancia de A con una instancia de B sin que el programa muestre un comportamiento incorrecto o inesperado.

Esto significa que los objetos de una clase derivada deben poder reemplazar a los objetos de la clase base sin que se necesite ningún conocimiento especial sobre qué clase derivada se está utilizando.

El objetivo de este principio es asegurar la consistencia y la cohesión en la jerarquía de clases, y prevenir problemas que pueden surgir debido a la violación de las suposiciones y reglas establecidas en la clase base. En última instancia, el cumplimiento de este principio contribuye a la mantenibilidad y reutilización del código en la programación orientada a objetos.

En el ejemplo de este ejercicio, al crear una interface y usarla en el método EmailGenerator, damos la posibilidad de que otra clase cualquiera que necesite usar el método generate pueda implementar la interface para asegurar que al usar el método generate() no va a haber ningún error puesto que pasará la intefaz que dicho método necesita sin errores.

En definitiva, **este principio permite que distintos fragmentos de código sean capaces de colaborar de forma correcta**.

### Violación del principio *Liskov Substitution*
Existen violaciones de este principio que pueden ahcer que, código que en un principio parece listo para colaborar, en realidad lo que introduzca sean problemas. Un ejemplo de uso sería si en la clase *UserEmailData* devolvemos una excepción en el método getAll(). En este caso estaríamos implementando el método que define la interface pero no estaríamos devolviendo lo que pide dicha interface. De esta forma a la hora de utilizar el método *generate()* en *EmailGenerator*, por ejemplo, fallaría y rompería el código.

Otro tipo de violaciones que se podrían dar es si los tipos que define la interface no son estrictos, de forma que si en lugar de definir que el método debe devolver un array no lo ponemos, también puede dar lugar a errores.
