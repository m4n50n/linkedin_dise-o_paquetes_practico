<?php

/** Otra forma de controlar excepciones */
class DatabaseException extends Exception
{}

function getUser($id): User
{
    $user = null;

    throw new DatabaseException("User not found");
}

try {
    getUser("123");
} catch (DatabaseException $e) {
    echo "User not found";
    // ó
    echo $e->getMessage();
}