<?php

session_start();
$logged_user = $_SESSION['logged_user'];

if (isset($logged_user) && !is_null($logged_user)) {
    $_SESSION['logged_user'] = null;
}

header("location: ../php/index-home.php");
exit();