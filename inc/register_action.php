<?php
    session_start();
    include 'db_connect.php';
<<<<<<< HEAD
    $sql = "INSERT INTO users SET username	= '" . $_POST['username']. "',pwd	= '" . $_POST['pwd'] . "'";
=======
    $sql = "INSERT INTO users SET username	= '" . $_POST['username']. "',pwd	= '" .sha1($_POST['pwd'])  . "'";
>>>>>>> change md5 in sha1
    if($mysqli->query ($sql)) {
        header("Location: /global.php?id=".$mysqli->insert_id."&username=".$_POST['username']);
    }else{
        header("Location: /register.php");
    }
    
?>
     