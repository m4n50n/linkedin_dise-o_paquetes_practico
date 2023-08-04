<?php

namespace Controller;

use ApiClient\NotifyUser;
use Database\UserRepository;
use Email\EmailSender;

class UserController
{
    public function createUser(
        UserRepository $repository,
        EmailSender $sender,
        NotifyUser $notify
    ) {
        /**
         * En lugar de realizar todas las acciones en este mismo método, incluiremos objetos que realicen cada una de las acciones respetando así el principio de SINGLE-RESPONSIBILITY
         * A su vez, la única responsabilidad de este método createUser sería dirigir las otras clases para que cada una ejecutase su tarea
         */
        // 1. Crear usuario en la base de datos
        $repository->saveUser($user);

        // 2. Enviar un email
        $sender->send($subject, $body, $user->getEmail());

        // 3. Notificar al administrador
        $notify->notifyCreateUser($user);
    }
}