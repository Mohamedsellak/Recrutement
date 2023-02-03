<?php

function checkSession($type_user, $url)
{
    if (!isset($_SESSION['login']) || $_SESSION['type_user'] != $type_user) {
        header("location: $url");
    }
}
checkSession('admin', 'google.com');
