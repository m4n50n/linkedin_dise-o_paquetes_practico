#### Estándares de estilo de código
Hay dos estándares aceptados para el estilo de código que escribimos:
- https://www.php-fig.org/psr/psr-1/ - PSR-1: Basic Coding Standard
- https://www.php-fig.org/psr/psr-12/ - PSR-12: Extended Coding Style

##### PHP CodeSniffer
https://github.com/squizlabs/PHP_CodeSniffer

Este proyecto nos proporciona una herramienta que permite verificar si el código que escribimos sigue un patrón de diseño concreto.

Para instalarlo:
`composer global require "squizlabs/php_codesniffer=*"`

- Para crear un enlace simbólico y usarlo en cualquier lado:
`ln -s ~/.composer/vendor/bin/phpcs /usr/local/bin/phpcs`

Para usarlo indicamos el estándar y la ubicacion:
`phpcs --standard=PSR1 .`

Esto comprobará los archivos según el estándar dado.
