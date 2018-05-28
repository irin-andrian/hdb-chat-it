<?php


include 'db_connect.php';
$username=$_POST['email'];
$pwd=$_POST['password'];

if( isset($username) && isset($pwd) && !empty($username) && !empty($pwd) ){
    $mysqli = conn();
    $sql = "SELECT * FROM users  WHERE users.usename=".$username."users.pwd=".$pwd;
    $result = $mysqli->query ($sql);
    $login = $result->fetch_all(MYSQLI_ASSOC);

    if(!isset($login) && !is_null($login)){

        header('Location: global.php');
    }
}
else{
   header("Location: /login.php");
}


