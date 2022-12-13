<?php
session_start();
$argument1 = $_GET['argument1'];
if ($_SESSION['user'] == null)
{
    header("Location: ../login/login.html");
    exit();
}
else{
    header("Location: $argument1");
    exit();
}
?>