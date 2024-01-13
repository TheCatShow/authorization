<?php

        setcookie('login', '', -3600, '/');
        setcookie('pass', '', -3600, '/');
        header('Location: /index.php');

?>