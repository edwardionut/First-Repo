<?php

require_once 'Car.php';
class Peugeot extends Car
{
    public function setSpeed(int $speed)
    {
        $this->speed = $speed + self::SPEED_FOR_PEUGEOT;
    }

}