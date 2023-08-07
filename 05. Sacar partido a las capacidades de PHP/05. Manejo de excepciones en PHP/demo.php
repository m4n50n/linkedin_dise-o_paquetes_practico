<?php

function listUsers(): array
{
    $user = [];

    return $user; // En este caso no necesitaríamos lanzar excepciones puesto que, aunque esté vacio, la función retorna un array y es correcto
}

function getUser($id): User
{
    $user = null; // Si $user es null, en este caso no podemos devolver un usuario de tipo User, por lo que no podemos cumplir el objetivo de la función, así que aquí sí que lanzaríamos una excepcion

    throw new Exception("User not found");
}