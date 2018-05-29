<?php
session_start();
include 'db_connect.php';
$user_id = $_POST['user_id'];
$user_name = $_POST['name'];

$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
$message = htmlentities(strip_tags($_POST['message']));
if (preg_match($reg_exUrl, $message, $url)) {
    $message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
} 
$sql = "INSERT INTO messages (user_id, message, date) VALUES ('".$user_id."','".$message."',now())";
$result = $mysqli->query ($sql);
header("Location: /global.php?id=".$user_id ."&username=".$user_name);
