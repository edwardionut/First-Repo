<?php

class Car
{
    public string $model;

    public function __construct(string $m)
    {
//        echo 'hello from construct method <br>';
        $this->model = "$m";
    }
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function __destruct()
    {
        echo 'unsetted <br>';
    }
}