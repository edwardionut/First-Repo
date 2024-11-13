<?php

use Obiectual\Details;
use Obiectual\DetailsRepository;

require_once './vendor/autoload.php';

$details = new Details(
    $_POST['email'],
    $_POST['city'],
    $_POST['user'],
);

$repo = new DetailsRepository($details);
$repo->save();