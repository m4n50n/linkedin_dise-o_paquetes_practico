<?php

function getDoubleFoo(B $b) {
    return $b->getFoo() * 2; # De esta forma retornaríamos el doble del valor sin mutar el valor de $foo

    /** De esta otra forma trabajaríamos creando una nueva instancia de la clase con un nuevo valor en $foo sin inmutar la variable $foo de la clase original */
    $newB = $b->withFoo($b->getFoo() * 2);
    return $newB->getFoo();
}

class B
{
    private $foo; # Al crearla como privada protegemos esta propiedad frente a cambios

    public function __constructor(int $foo)
    {
        if ($foo > 10) { # De esta forma convertimos nuestro objeto en "objeto de valor" asegurándonos de que esta función se va a cumplir siempre (porque si no, mostrará una excepción)
            throw new Exception("Foo es demasiado grande");
        }

        $this->foo = $foo;
    }

    public function getFoo(): int # Getter
    {
        return $this->foo;
    }

    public function withFoo(int $foo): B
    {
        return new self($foo); # En esta línea se retornará una nueva instancia de esta misma clase
        # Aquí, en lugar de modificar el valor de $foo, creamos una nueva instancia con un nuevo valor de $foo
    }
}

$b = new B(5);
echo $b->getFoo(); # Devuelve 5

echo getDoubleFoo($b); # Devuelve 10

echo $b->getFoo(); # Devuelve 5

# !! De esta manera la propiedad privata foo permanecerá inmutable