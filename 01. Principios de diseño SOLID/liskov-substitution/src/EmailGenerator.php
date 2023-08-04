<?php

/**
 *  La idea de tener la interface es asegurar que cualquier clase que use el método generate lo haga sin problemas 
 */
class EmailGenerator
{
    public function generate(EmailDataInterface $data): string {
        $content = "";

        $data->get("name");
        $data->getAll();

        // Generate email content

        return $content;
    }
}
