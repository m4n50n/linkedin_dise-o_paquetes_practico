<?php

function getDoubleFoo(A $a) {
    $a->foo *= 2;
    return $a->foo;
}

class A
{
    public $foo;

    public function __constructor(int $foo)
    {
        $this->foo = $foo;
    }
}

$a = new A(5);
echo $a->foo; # Devuelve 5

echo getDoubleFoo($a); # Devuelve 10. Esto es un efecto colateral, en el que no sabemos qué ha podido pasar en el código ya que en la siguiente línea, que también devuelve 10, deberíamos esperar 5 si entendemos que $foo debería ser inmutable

echo $a->foo; # Devuelve 10