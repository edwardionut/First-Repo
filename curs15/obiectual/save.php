<?php

use Obiectual\User;
use Obiectual\UserRepository;

require_once './vendor/autoload.php';

$user = new User(
    $_POST['username'],
    $_POST['password'],
    $_POST['full_name']
);

$userRepository = new UserRepository($user);
$userRepository->save();