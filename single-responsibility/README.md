### Principio *Single Responsibility*
El principio de responsabilidad única (Single Responsibility Principle, SRP) es un concepto en programación orientada a objetos que afirma que una clase debe tener solo una razón para cambiar. Este es uno de los cinco principios del SOLID, un conjunto de directrices de diseño que buscan hacer el código más comprensible, flexible y mantenible. En el contexto del SRP, "una razón para cambiar" significa que una clase debe tener solo una responsabilidad o funcionalidad (debe hacer una sola cosa). Esto ayuda a evitar la complejidad innecesaria y mejora la cohesión del código, facilitando su prueba, comprensión y refactorización.

En el ejemplo de este ejercicio, cada clase tendría una responsabilidad única. A su vez, el método *createUser* tendría como única función dirigir la ejecución de las demás clases.

### Violación del principio *Single Responsibility*
Cuando no utilizamos el principio SRP, estamos dando múltiples responsabilidades a una clase. Si toda la lógica de creación de un usuario, por ejemplo, la hiciéramos dentro del controlador *createUser*, acabaríamos teniendo un método muy grande, difícil de mantener, complicado de leer, poco escalable e incluso provocaría conflictos en el control de versiones en caso de que haya varios desarrolladores modificando el mismo método (debido a que todo está en ese método).
