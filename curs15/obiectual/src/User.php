<?php

namespace Obiectual;

class User
{
    private int $id;
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

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }
}