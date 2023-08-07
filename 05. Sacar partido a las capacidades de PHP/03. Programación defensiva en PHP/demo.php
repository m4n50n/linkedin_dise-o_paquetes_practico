<?php

class A
{
    public function get()
    {
        return "something";
    }
}

function getFromA(A $a) { # Simplemente especificando que $a debe ser una instancia de A, facilitamos la depuración de errores
    return $a->get();
}

getFromA("test");