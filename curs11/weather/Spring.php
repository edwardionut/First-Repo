<?php

require_once 'Weather.php';
require_once 'Rainy.php';
require_once 'Foggy.php';
require_once 'Windy.php';
require_once 'Sunny.php';
class Spring extends Weather implements Rainy, Foggy, Windy, Sunny
{
    public function fog(): string
    {
        return 'ceata deasa';
    }

    public function wet(): string
    {
        return 'ploua';
    }

    public function hot(): string
    {
        return 'canicula';
    }

    public function blow(): string
    {
        return 'bate vantul';
    }

    public function getMeteo(): string
    {
        $meteo = 'Today temperature is %d, humidity is %d and pressure is %d.<br>';
        $meteo .= 'Weather in Spring is %s, %s, %s and %s.';
            // $meteo = $meteo . '';  =  $meteo .=

        return sprintf( $meteo,
            $this->temperature,
            $this->humidity,
            $this->pressure,
            $this->fog(),
            $this->blow(),
            $this->hot(),
            $this->wet() );
    }

}