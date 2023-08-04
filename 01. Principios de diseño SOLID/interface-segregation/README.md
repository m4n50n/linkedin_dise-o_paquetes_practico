### Principio *Interface Segregation*
El Principio de Segregación de Interfaces (Interface Segregation Principle, ISP) es uno de los cinco principios SOLID en la programación orientada a objetos. Este principio establece que ningún cliente (o clase) debe ser forzado a depender de interfaces que no utiliza.

En términos más técnicos, este principio sugiere que es mejor tener muchas interfaces que son específicas para cada cliente en lugar de tener una única interface general que encapsula todo. Una interface con demasiadas responsabilidades, es decir, que provee más métodos o funcionalidades de los que un cliente necesita, puede ser problemática porque cualquier cambio en esa interface podría afectar a los clientes que no utilizan la funcionalidad que cambió.

El objetivo de este principio es minimizar las dependencias innecesarias entre las clases y promover la cohesión y la facilidad de mantenimiento en el código. Cuando las interfaces están bien segregadas y son específicas a una única responsabilidad o conjunto de funcionalidades relacionadas, es menos probable que los cambios en una parte del sistema afecten a otras partes del sistema que no están relacionadas con esos cambios.

En definitiva, este principio trata sobre la **precisión a la hora de diseñar el código**.

En el ejemplo de este ejercicio, la clase *EmailSender* debe enviar un correo de bienvenida y otro de información, y por otro lado únicamente tenemos una interface *EmailTemplateInterface*.

El problema, es que si cuando creemos las clases para enviar info y enviar bienvenida respectivamente, implementamos esta misma interface, no servirá para las mismas clases, ya que el email de bienvenida será genérico y no pasaremos ningún parámetro al método *get()*, pero el método *fillOut* sí enviará información y necesitará un parámetro, así que si implementamos la misma interface en los dos, no servirán los mismos métodos para cada clase, ya que una solo usará un método y otra otro. En este caso tendríamos que crear dos interfaces distintas.

### Violación del principio *Interface Segregation*
En este caso nos exponemos a errores debido a interfaces poco específicas.
