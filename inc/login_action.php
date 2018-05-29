<?php
session_start();
include 'db_connect.php';
$username = $_POST['username'];
$pwd = sha1($_POST['pwd']);

if($username != null && $pwd != null){
    $sql = "SELECT * FROM users  WHERE users.username='".$username."' and users.pwd='".$pwd."'";
    $result = $mysqli->query ($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
     if($data !=null){
         $_SESSION['username'] = $_POST['username'];
         $_SESSION['id'] = $data[0]['id'];

         header("Location: /global.php?id=".$data[0]['id']."&username=".$data[0]['username']);
     }else{
         header("Location: /login.php");
     }
}else{
    header("Location: /login.php");
}
?>