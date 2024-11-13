<?php

namespace Obiectual;

class Details
{
    private int $userId;
    private string $email;
    private string $city;

    public function __construct(string $email, string $city, int $userId)
    {
        $this->email = $email;
        $this->city = $city;
        $this->userId = $userId;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}