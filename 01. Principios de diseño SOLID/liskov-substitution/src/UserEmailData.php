<?php

class UserEmailData implements EmailDataInterface
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function get(string $key): string {
        if ($key === "name") {
            return $this->name;
        } else if ($key === "email") {
            return $this->email;
        }
    }

    public function getAll(): array {
        return [
            "name" => $this->name,
            "email" => $this->email
        ];
    }
}
