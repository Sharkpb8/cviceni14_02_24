<?php
session_start();
if(empty($_POST["username"]) || empty($_POST["password"])){
    header('Location: index.php');
    exit();
}

$username = $_POST["username"];
$_SESSION['username'] = $username;
header('Location: welcome.php');
?>