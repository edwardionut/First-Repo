<?php

require_once 'connection.php';

$queryUsers = "CREATE TABLE IF NOT EXISTS users(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    full_name VARCHAR(30) NOT NULL
)";

$queryDetails = "CREATE TABLE IF NOT EXISTS details(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11) UNSIGNED NOT NULL,
    email VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
)";

mysqli_query($connection, $queryUsers);
mysqli_query($connection, $queryDetails);