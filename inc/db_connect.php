<?php
function conn() {
  $mysqli = new mysqli('db4free.net', 'hdb_chat_it_by_i', '12345678', 'hdb_chat_it_by_i');
  $mysqli->set_charset('utf8');
  return $mysqli;
}

$mysqli = conn();


<<<<<<< HEAD:inc/db_connect.php
?>
=======
exit();
<<<<<<< HEAD
=======

>>>>>>> initialize db connection
?>
>>>>>>> loggin:inc/register_action.php.php
