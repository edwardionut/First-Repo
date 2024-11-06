<?php

namespace G9\Curs12;

class Logger
{
    protected string $message;

    public function log(string $message): void
    {
        $this->message = $message;
    }
}