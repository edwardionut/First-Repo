<?php

require_once 'Curs.php';
class JavaCurs extends Curs
{
    public function getCursName(): string
    {
        return parent::getCurs();
    }
}