<?php

use Obiectual\UserRepository;

require_once 'vendor/autoload.php';

$userRepo = new UserRepository();
$users = $userRepo->getUsers();

?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Lista Utilizatori</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>

<h1>Lista Utilizatorilor</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nume</th>
        <th>Nume Complet</th>
    </tr>
    <?php
    if (!empty($users)) {
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . $user->getId() . "</td>";
            echo "<td>" . $user->getUsername() . "</td>";
            echo "<td>" . $user->getFullName() . "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>

</body>
</html>