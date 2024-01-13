<?php
function checkAuth($login, $password) 
{
    require __DIR__.'/userDB.php';

    foreach ($arrayUsers as $user) {
        if ($user['login'] === $login && $user['pass'] === $password) {
            return true;
        } else {
            return false;
        }
    }

    return false;
}

function getUserLogin() 
{
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passFromCookie = $_COOKIE['pass'] ?? '';

    if(checkAuth($loginFromCookie, $passFromCookie)) {
        return $loginFromCookie;
    } else {
        return null;
    }
}