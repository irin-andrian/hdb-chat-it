<?php
session_start();
include 'db_connect.php';
$username = $_POST['username'];
$pwd = $_POST['pwd'];
if($username != null && $pwd != null){
    $sql = "SELECT * FROM users  WHERE users.username='".$username."' and users.pwd='".$pwd."'";
    $result = $mysqli->query ($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    $_SESION['username'] = $_POST['username'];
	$_SESION['id'] = $data[0]['id'];
	header("Location: /global.php?id=".$data[0]['id']);
}else{
    header("Location: /login.php");
}
?>