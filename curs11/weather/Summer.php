<?php

require_once 'Weather.php';
require_once 'Sunny.php';
class Summer extends Weather implements Sunny
{
    public function hot(): string
    {
        return 'canicula';
    }

    public function getMeteo(): string
    {
        $meteo = 'Today temperature is %d, humidity is %d and pressure is %d.<br>';
        $meteo .= 'Weather in Summer is %s.';

        return sprintf( $meteo,
            $this->temperature,
            $this->humidity,
            $this->pressure,
            $this->hot() );

    }
}