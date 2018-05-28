<?php

include 'inc/db_connect.php';
$username=$_POST['email'];
$pwd=$_POST['password'];

if( isset($username) && isset($pwd) && !empty($username) && !empty($pwd) ){
    $mysqli = conn();
    $sql = "SELECT * FROM users  WHERE users.usename=".$username."users.pwd=".$pwd;
    $result = $mysqli->query ($sql);
    $login = $result->fetch_all(MYSQLI_ASSOC);
    header(Location: "global.php");
}
else{
    location(header("Location: /login.php"););
}
?>