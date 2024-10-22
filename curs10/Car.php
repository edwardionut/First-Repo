<?php

abstract class Car
{
    const SPEED_FOR_AUDI = 10;
    const SPEED_FOR_PEUGEOT = 5;

    public string $name;
    public string $color;

    protected int $speed;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    abstract public function setSpeed(int $speed);

    public function __toString(): string
    {
        return get_class($this) . ' has speed: ' . $this->speed;
    }
}