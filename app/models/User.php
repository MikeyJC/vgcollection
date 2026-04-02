<?php

namespace App\models;

class User
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getUsername()
    {
        return $this->username;
    }
}