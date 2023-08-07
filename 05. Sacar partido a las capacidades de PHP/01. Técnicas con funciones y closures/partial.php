<?php

function getArea (int $x, int $y): int
{
    return $x * $y;
}

$getAreaWithX = function (int $x) { // $getAreaWithX será la función que se retorne a la que ya se le habrá aplicado el valor de $x
    return function (int $y) use ($x) {
        return getArea($x, $y);
    };
};

$completeAreaWithY = $getAreaWithX(5); // Al llamar a esta función se retornará la función "function (int $y) use ($x) {...", que ya tendrá establecido el 5 como $x y podremos llamar pasando $y

echo $completeAreaWithY(2), "\n"; # El resultado será 10
echo $completeAreaWithY(5), "\n"; # El resultado será 25
echo $completeAreaWithY(10), "\n"; # El resultado será 50