<?php

require_once 'Scream.php';
class Dog implements Scream
{
    public function makeSound(): string
    {
       return 'ham ham';
    }

}