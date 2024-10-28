<?php

require_once 'Conectare.php';
require_once 'TransmitereDate.php';

abstract class Controller implements Conectare, TransmitereDate
{
    public static $user = 'admin';
    public static $pass = '1234';
    public static $url = 'https://exemplu.ro';
}