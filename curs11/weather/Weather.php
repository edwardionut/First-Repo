<?php

abstract class Weather
{
    protected int $temperature;

    protected int $humidity;

    protected int $pressure;

    public function __construct(int $temperature, int $humidity, int $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
    }

    abstract public function getMeteo(): string;
}