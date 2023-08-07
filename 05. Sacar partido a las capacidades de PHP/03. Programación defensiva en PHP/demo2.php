<?php

class Logger
{
    public function log(string $msg)
    {
        echo $msg;
    }
}

class A {
    private $logger; # Haciendo privada esta proviedad prevenímos que su valor sea modificado desde fuera

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function execute()
    {
        // Do something
        $this->logger->log("OK");
    }
}

$a = new A(new Logger());
$a->execute(); // Esto funcionará, pero no hemos protegido la instancia de Logger, así que cualquier persona desde cualquier parte podría hacer lo siguiente:

$a->logger = "foo"; // Aquí mutaríamos el valor de logger y obtendríamos errores en el futuro
$a->execute();

// Para prevenir todo esto, basta con hacer $logger propiedad privada hy así su valor no se podría cambiar