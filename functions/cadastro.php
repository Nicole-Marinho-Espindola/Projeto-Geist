<?php
session_start();

$_SESSION['users'][] = [
    'email' => 'email2@email.com',
    'password' => '12345'
];

header("location: ../php/index-login.php");
exit();