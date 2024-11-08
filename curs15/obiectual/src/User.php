<?php

namespace Obiectual;

class User
{
    private string $username;
    private string $password;
    private string $fullName;

    public function __construct(string $username, string $password, string $fullName)
    {
        $this->username = $username;
        $this->password = $password;
        $this->fullName = $fullName;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }
}