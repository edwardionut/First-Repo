<?php
require_once 'getUsers.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="saveDetails.php" method="post">
        User: <select name="user">
            <?php foreach ($users as $user): ?>
            <option value="<?=$user->getId()?>"> <?=$user->getUsername() ?></option>
            <?php endforeach; ?>
        </select><br>
        Email: <input type="email" name="email"><br>
        City: <input type="text" name="city"><br>
        <input type="submit" value="save">
    </form>
</body>
</html>