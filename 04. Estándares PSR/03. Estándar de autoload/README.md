#### Estándar de autoload
Uno de los estándares más importantes del PHP-FIG es el estándar de autoloading:
https://www.php-fig.org/psr/psr-4/

Lo más importante de este estándar es la especificación de los nombres de las clases. ¿Para qué sirve esto? Si escribimos las clases con los nombres de acuerdo a esta especificación, podremos utilizar librerías de autoloading como la que incorpora *Composer*. 

Ejemplo:
Iniciamos un proyecto con Composer haciendo `composer init` y generamos el fichero sin necesidad de incluir dependencias. Ahora tenemos el fichero composer.json. 

Una vez aquí podemos añadir una entrada autoload, en la cual tenemos varias opciones. El archivo composer.json quedaría como en la imagen guardada dentro de la carpeta de este proyecto. 
