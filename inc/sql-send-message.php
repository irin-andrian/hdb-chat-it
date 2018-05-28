<?php
$sql = "
  SELECT 
    u.username as nom,
    m.message
  FROM 
    messages m
  INNER JOIN
    users u ON m.user_id = u.id 
  ORDER BY
    m.date DESC
";
$result = $mysqli->query($sql);
$aMessage = $result->fetch_all(MYSQLI_ASSOC);

$sqlUser = "
  SELECT
    id,
    username
  FROM
    users
  LIMIT 6  
";
$resultUser = $mysqli->query($sqlUser);
$aUser = $resultUser->fetch_all(MYSQLI_ASSOC);
?>