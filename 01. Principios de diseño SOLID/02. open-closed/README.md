### Principio *Open/Closed*
El principio de abierto/cerrado (Open/Closed Principle, OCP) es un principio fundamental en programación orientada a objetos que establece que las entidades de software (como clases, módulos, funciones, etc.) deben estar abiertas para su extensión, pero cerradas para su modificación. Esto es uno de los cinco principios SOLID que buscan mejorar la calidad del software.

En términos más detallados:

***Abierto para su extensión*** significa que el comportamiento de la entidad de software puede ser extendido para satisfacer nuevas demandas. Esto implica que podemos agregar nuevas características o comportamientos sin alterar el código existente.

***Cerrado para su modificación*** significa que una vez que la entidad de software ha sido desarrollada y probada, su código fuente no debería modificarse a menos que se detecten errores.

La idea detrás del OCP es que podemos agregar nuevas funcionalidades o cambiar el comportamiento de un sistema sin tener que cambiar y, por tanto, arriesgarnos a romper el código existente. Esto se logra a menudo mediante el uso de interfaces, la herencia y el polimorfismo para crear código que puede ser extendido de manera segura.
