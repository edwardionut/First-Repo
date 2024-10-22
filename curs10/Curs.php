<?php

class Curs
{
    public static string $curs = 'PHP';

    public function getName(): string
    {
        return self::$curs;
    }

    public static function getCurs(): string
    {
        return 'JavaScript';
    }
}