<?php
session_start();
include ("db_connect.php");
$sql = "INSERT INTO users
SET username	= '" . $_POST['username']. "',
    pwd	= '" . $_POST['pwd'] . "'";
$result = $mysqli->query ($sql);
$_SESION['username'] = $_POST['username'];
$_SESION['id'] = $_POST['id'];
header('Location: global.php');
?>
