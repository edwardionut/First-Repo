<?php

class Auth
{
    public string $username;
    public string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function check(): bool
    {
        if ($this->username == 'admin' && $this->password == 'parola') {
            return true;
        }

        return false;
    }
}