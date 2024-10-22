<?php
session_start();

require_once "Auth.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $auth = new Auth($_POST['username'], $_POST['password']);

    if ($auth->check()) {
        $_SESSION['username'] = $_POST['username'];
    }
}

if (isset($_SESSION['username'])) {
    echo 'Hello ' . $_SESSION['username'] . '!';
} else {
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    Username: <input type="text" name="username"> <br>
    Password: <input type="password" name="password"> <br>
    <input type="submit" value="Login">

</form>

<?php
}
?>