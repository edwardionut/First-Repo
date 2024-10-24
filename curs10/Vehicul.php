<?php

abstract class Vehicul
{
    protected $marca;
    protected $model;
    protected $numarRoti;
    protected $tipMotor;
    protected $numarLocuri;

    abstract public function claxoneza();
    abstract public function semnalizeaza();

    public function __construct($marca, $model, $numarRoti, $tipMotor, $numarLocuri)
    {
        $this->marca = $marca;
        $this->model = $model;
        $this->numarRoti = $numarRoti;
        $this->tipMotor = $tipMotor;
        $this->numarLocuri = $numarLocuri;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getNumarRoti()
    {
        return $this->numarRoti;
    }

    public function getTipMotor()
    {
        return $this->tipMotor;
    }

    public function getNumarLocuri()
    {
        return $this->numarLocuri;
    }
}