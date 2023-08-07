<?php

class A
{
    /**
     * Funciones anónimas: https://www.php.net/manual/es/functions.anonymous.php
     */
    public function getFooCallback()
    {
        $foo = 5;
        return function () use ($foo) {
            return $foo;
        };
    }
}

$a = new A();
// echo $a->getFooCallback(); # Aquí obtendríamos un error porque recibiríamos un objeto Closure (es decir, una función que es la que retornamos)
echo $a->getFooCallback()(); # De esta forma ejecutaríamos la función que devuelve el método (con el primer paréntesis llamamos al método y con el segundo a la función anónima que devuelve el método)