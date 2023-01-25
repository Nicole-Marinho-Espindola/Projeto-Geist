<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$logged_user = null;

foreach($_SESSION['users'] as $user) {
    if ($user['email'] === $email && $user['password'] === $password) {
        $logged_user = $user;
        break;
    }
}

if ($logged_user !== null) {
    $_SESSION['logged_user'] = $logged_user;

    header("location: ../php/index-home.php");
    exit();
} else {
    header("location: ../php/index-login.php");
    exit();
}
