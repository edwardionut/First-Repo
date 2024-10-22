<?php

require_once 'Car.php';
class Audi extends Car
{
    public function setSpeed(int $speed)
    {
        $this->speed = $speed + self::SPEED_FOR_AUDI;
    }

}