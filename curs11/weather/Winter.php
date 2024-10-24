<?php

require_once 'Weather.php';
require_once 'Rainy.php';
require_once 'Foggy.php';
require_once 'Windy.php';
require_once 'Icy.php';
class Winter extends Weather implements Foggy, Windy, Rainy, Icy
{
    public function fog(): string
    {
        return 'ceata deasa';
    }

    public function wet(): string
    {
        return 'ploua';
    }

    public function frozen(): string
    {
        return 'gheata';
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
            $this->frozen(),
            $this->wet() );
    }
}