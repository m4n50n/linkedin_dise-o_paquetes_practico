### 04. Principios de acoplamiento - Dependencias cíclicas
El acoplamiento se refiere al grado en el que una parte de un sistema (como una clase o un módulo) depende de otra parte. Un acoplamiento bajo es generalmente deseable, ya que significa que cada parte del sistema puede operar y evolucionar de manera independiente, lo que facilita la comprensión, la prueba y la modificación del software.

Las dependencias cíclicas, por otro lado, ocurren cuando dos o más módulos o clases dependen uno del otro de tal manera que forman un ciclo. Por ejemplo, si el módulo A depende del módulo B, que depende del módulo C, que a su vez depende del módulo A, entonces tienes una dependencia cíclica. Este tipo de dependencias pueden hacer que el software sea más difícil de entender, probar y cambiar, y generalmente se consideran un signo de mal diseño.

Por lo tanto, se debería buscar minimizar tanto el acoplamiento como las dependencias cíclicas en el diseño de software. Mantener un bajo acoplamiento y evitar las dependencias cíclicas ayuda a asegurar que el software sea modular, lo que facilita su mantenimiento y evolución a lo largo del tiempo.

En definitiva, los principios de acoplamiento tratan sobre código que, a pesar de no formar parte de la misma funcionalidad, están relacionados mediante una dependencia, y este principio nos dice que **la estructura de dependencias entre paquetes no debe tener ciclos**.
