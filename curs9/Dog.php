<?php

require_once 'Animal.php';
class Dog extends Animal
{
    public function setLegs(int $legs): void
    {
        if ($legs > 4) {
            echo 'Too much legs...';
            return;
        }

        $this->legs = $legs;
    }

    public function setHeight(int $height): void
    {
        parent::setHeight($height);
    }

    public function __toString(): string
    {
        return 'This is a ' . get_class($this) . ' and has ' . $this->legs . ' legs.';
    }

}