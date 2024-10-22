<?php

require_once 'export_to_csv.php';

$persons = [
    [
        'first_name' => 'Ionut',
        'last_name' => 'Edward',
        'phone' => '0723311363',
        'email' => 'edward@example.com',
    ],
    [
        'first_name' => 'Carolina',
        'last_name' => 'Petronela',
        'phone' => '0721238972',
        'email' => 'Carolina@example.com',
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Mattew',
        'phone' => '9081309713',
        'email' => 'John@example.com',
    ],
];

exportToCSV($persons, 'persons.php', 'w+');