<?php
    session_start();
    include 'db_connect.php';

    $sql = "INSERT INTO users SET username	= '" . $_POST['username']. "',pwd	= '" .sha1($_POST['pwd'])  . "'";

    if($mysqli->query ($sql)) {
        header("Location: /global.php?id=".$mysqli->insert_id."&username=".$_POST['username']);
    }else{
        header("Location: /register.php");
    }
    
?>
     