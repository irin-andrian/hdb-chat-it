<?php

include 'db_connect.php';
$username=$_POST['username'];
$pwd=$_POST['password'];

if( isset($username) && isset($pwd) && empty($username) && empty($pwd) ){
    $mysqli = conn();
    $sql = "SELECT * FROM users  WHERE users.usename=".$username."users.pwd=".$pwd;
    $result = $mysqli->query ($sql);
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
   if (!empty($row)&& !is_null($row)){
       header('Location: inc/global.php');
   }else
       header('Location: login.php');
}

?>


