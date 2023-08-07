#### Estándar de loggin
PHP-FIG tiene otro estándar que sirve para definir cómo enviar mensajes de log desde una aplicación en PHP: **Logger Interface**

https://www.php-fig.org/psr/psr-3/

Para instalarlo: 
`composer require psr/log`

Si estamos desarrollando una librería en la que damos una funcionalidad y queremos dar una posibilidad de escribir mensajes de log desde ella, esta librería permitirá que quien use nuestro paquete decida qué librería de log quiere utilizar, siempre y cuando implemente este estándar. 

Se ha creado la clase *Foo.php* de ejemplo, pero además hay que definir cuál es la librería de logger que va a ejecutar la acción de guardar logs. En este ejemplo usaremos **monolog**, que es una librería que implementa *psr/log*. Para instalarla:
`composer require monolog/monolog`

Al ejecutar el archivo se verá por pantalla el log construido.
