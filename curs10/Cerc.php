<?php

class Cerc
{
    public static $raza;
    const PI = 3.14;

    public static function circumferinta()
    {
        echo 'Cercul cu raza ' . self::$raza . ' are circumferinta ' . 2  * self::PI * self::$raza . '<br>';
    }

    public static function aria()
    {
        echo 'Cercul cu raza ' . self::$raza . ' are aria ' . self::PI * self::$raza ** 2 . '<br>';
    }
}