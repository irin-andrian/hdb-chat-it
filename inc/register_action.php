<?php
    session_start();
    include 'db_connect.php';
    $sql = "INSERT INTO users SET username	= '" . $_POST['username']. "',pwd	= '" . $_POST['pwd'] . "'";
    $result = $mysqli->query ($sql);
    if($result) {
        $id = $result->mysql_insert_id();
    }
    header("Location: /global.php?id=".$id."&username=".$_POST['username']);
?>
     