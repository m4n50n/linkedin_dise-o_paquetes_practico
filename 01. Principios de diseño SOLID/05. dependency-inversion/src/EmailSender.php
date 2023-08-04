<?php

class EmailSender
{
    public function send(string $content)
    {
        // Send email
    }

    /**
     * El problema, es que en esta clase, este método está atado a la clase User
     * Imaginemos que tenemos una clase Admin similar a User pero que cambia en algunos aspectos puestos que es para usuarios Admin
     * Es posible que en algún momento quisiéramos usar este método también para el objeto Admin
     * 
     * Para resolver esto, implementaremos EmailTemplateInterface en los objetos User y Admin, y modificaremos este método para que espere una interface
     * De esta manera, esta clase EmailSender pasaría de depender de una concreción a depender de una abstracción
     */
    // public function sendNewUserEmail(User $user) # Método "atado" a user
    public function sendNewUserEmail(EmailTemplateInterface $user)
    {
        $userData = $user->getData();

        $this->send(
            str_replace(
                array_keys($userData),
                array_values($userData),
                file_get_Contents("./new_user.html")
            )
        );
    }
}
