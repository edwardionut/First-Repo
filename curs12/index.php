<?php

require_once "vendor/autoload.php";

use \G9\Curs12\Logger;
use G9\Curs12\Shop\Magazin;

dump('Logging...');

$logger = new Logger();

$logger->log('here');

$shop = new Magazin();

dd($logger, $shop);
