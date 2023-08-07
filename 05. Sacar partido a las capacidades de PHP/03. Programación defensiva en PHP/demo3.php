<?php

function doSomething(int $value) {
    // Mucho código cualquiera

    if ($value > 5) { // Para evitar errores, este tipo de comprobaciones debe hacerse al principio de la función y no después de haber ejecutado más código
        throw new Exception("Bad value");
    }

    // De esta manera estaríamos aplicando lo que se llama un guard clausule o cláusula de protección
}

// Osea, debería quedar así:
function doSomething(int $value) {
    if ($value > 5) { // Cláusula de protección
        throw new Exception("Bad value");
    }

    // Mucho código cualquiera
}