<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    First Name: <input type="text" name="first_name"> <br>
    Last Name: <input type="text" name="last_name"> <br>
    Age: <input type="text" name="age"> <br>
    <input type="submit" value="Send">
</form>

<?php

    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $age = $_POST['age'] ?? 0;

    if(!is_numeric($age)) {
        die('Age must be a number');
    }

    echo $first_name . ' ' . $last_name . ' ' . $age;
