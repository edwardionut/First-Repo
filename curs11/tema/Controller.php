<?php

require_once 'Conectare.php';
require_once 'TransmitereDate.php';

class Controller implements Conectare, TransmitereDate
{
    public static $user = 'admin';
    public static $pass = '1234';
    public static $url = 'https://exemplu.ro';

    public function inchidereConexiune($param1): bool
    {

    }

    public function stabilireConexiune($param1, $param2, $param3): bool
    {

    }

    public function setareVolumDate($param1)
    {

    }

    public function statusTransmitere(): float
    {

    }

    public function stergeDate()
    {

    }
}