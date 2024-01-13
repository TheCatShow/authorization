<?php
if (!empty($_POST)) {

    if (checkAuth($login, $password)) {
        unset($_SESSION['login']);
        unset($_SESSION['password']);
        session_unset();
        session_destroy();
        header('Location: /index.php');
    }
}
?>