<?php

class B
{
    private function duplicate(int $x): int
    {
        return $x * 2;
    }

    public function duplicateArray(array $numbers): array
    {
        return array_map([$this, 'duplicate'], $numbers); // array_map aplica una función a todos los elementos de un array
    }
}

$b = new B();
print_r($b->duplicateArray([2, 5, 10])); # El resultado será [4, 10, 20]