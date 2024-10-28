<?php

interface Conectare
{
    public function stabilireConexiune($param1, $param2, $param3): bool;
    public function inchidereConexiune($param1): bool;
}