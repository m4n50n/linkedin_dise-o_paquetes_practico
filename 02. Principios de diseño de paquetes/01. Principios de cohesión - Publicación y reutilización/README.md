### 01. Principios de cohesión - Publicación y reutilización
El principio de cohesión se refiere a la idea de que cada módulo o componente en un sistema de software debe tener una única responsabilidad o función. La cohesión es alta si un módulo realiza solo una tarea específica. El objetivo es mejorar la facilidad de mantenimiento, reutilización y comprensión del software.

Por otro lado, la publicación y la reutilización se refieren a la práctica de compartir y volver a usar componentes de software existentes en lugar de crear nuevos desde cero. Esto puede mejorar la eficiencia del desarrollo y la coherencia del software, ya que los componentes reutilizables han sido probados y optimizados a lo largo del tiempo.

En definitiva, **este principio nos indica que se debe publicar código en la misma medida en la que este se va a reutilizar**.

Probablemente, lo más importante a la hora de publicar un proyecto sea mantener las versiones en GitHub, por ejemplo, usando tanto ramas como etiquetas

El formato adecuado de versiones es **Semver** (https://semver.org/lang/es/).

Otras cosas importantes a tener en cuenta al publicar es que vamos a establecer una relación con otros desarrolladores. Esos desarrolladores es posible que quieran contribuir, por tanto, es importante establecer unas normas sobre cómo contribuir código. También, si quieren utilizar el código tendrá que ser bajo los términos que sean adecuados, para eso hay que elegir una licencia e incluirla en el código. En este caso, por ejemplo, es una licencia MIT. También importante, si queremos publicar el código, es dar unas instrucciones a quien quiera utilizarlo para que sean capaces de hacerlo. Una librería publicada que no tiene unas instrucciones, que no indica cómo instalarla, cómo utilizarla, es lo mismo que si no se hubiera publicado. Lo habitual es utilizar el fichero Readme para dar las instrucciones de instalación, seguidas de algún ejemplo de uso, algo rápido con lo que empezar a probarla, probablemente indicar cómo ejecutar las pruebas, y se suele dar el acceso a más información para quien necesite profundizar.
