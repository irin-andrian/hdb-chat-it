<?php
session_start();
include 'db_connect.php';
$sql = "INSERT INTO users SET username	= '" . $_POST['username']. "',pwd	= '" . $_POST['pwd'] . "'";
$result = $mysqli->query ($sql);
header("Location: /login.php");
?>
     