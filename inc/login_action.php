<?php
include 'db_connect.php';
$username = $_POST['username'];
$pwd = $_POST['pwd'];
if($username != null && $pwd != null)
{
	$sql = "SELECT * FROM users WHERE users.username = '".$username."' and users.pwd = '".$pwd."'";
	$result = $mysqli->query ($sql);
	$result->fetch_all(MYSQLI_ASSOC);
	header('Location: global.php');
}else{
	header('Location: login.php');
}
?>