<?php
session_start();

if (isset($_SESSION['counter'])) {
   $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}

echo 'You visited this website ' . $_SESSION['counter'] . ' times';

unset($_SESSION['counter']); // sterge o variabila din sesiune

session_unset(); // sterge toate variabilele din sesiune

session_destroy(); // sterge sesiunea