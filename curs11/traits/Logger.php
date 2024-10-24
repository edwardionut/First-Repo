<?php

trait Logger
{
    public function log(string $message): void
    {
        echo 'Message logged: ' . $message . PHP_EOL;
    }
}