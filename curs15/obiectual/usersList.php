<?php

use Obiectual\UserRepository;

require_once 'vendor/autoload.php';

$repo = new UserRepository();
$search = '';

if(isset($_GET['search'])) {
    $search = $_GET['search'];
    $users = $repo->searchByFullName($_GET['search']);
} else {
    $users = $repo->getUsers();
}
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
<form action="usersList.php" method="get">
    Search by Full Name: <br>
    <input type="text" value="<?=$search?>" name="search">
    <input type="submit" value="search">
</form>
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