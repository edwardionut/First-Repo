<?php

use Obiectual\UserRepository;

require_once './vendor/autoload.php';

$repo = new UserRepository();
$users = $repo->getUsers();
