<?php

 class Matematica
{
    public static function adunare ($param1, $param2)
    {
        echo $param1 + $param2 . '<br>';
    }

    public static function scadere ($param1, $param2)
    {
        echo $param1 - $param2 . '<br>';
    }

    public static function inmultire ($param1, $param2)
    {
        echo $param1 * $param2 . '<br>';
    }

    public static function impartire ($param1, $param2)
    {
        echo $param1 / $param2 . '<br>';
    }

    public static function ridicareLaPutere ($param1, $param2)
    {
        echo $param1 ** $param2 . '<br>';
    }
}