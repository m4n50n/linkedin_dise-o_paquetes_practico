<?php

/**
 * Esta interface la usamos en la clase EmailGenerator
 */
interface EmailDataInterface
{
    public function get(string $key): string;
    public function getAll(): array;
}
