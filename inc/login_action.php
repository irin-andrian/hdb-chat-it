<?ph
include 'inc/db_connect.php';
$username=$_POST['username'];
$pwd=$_POST['pwd'];
if( isset($username) && isset($pwd) && !empty($username) && !empty($pwd) ){
    $mysqli = conn();
    $sql = "SELECT * FROM users  WHERE users.usename=".$username."users.pwd=".$pwd;
    $result = $mysqli->query ($sql);
    $login = $result->fetch_all(MYSQLI_ASSOC);
    header('Location: http://chat-it.hdb-solutions.local/global.php');
}
else{
    header('Location: http://chat-it.hdb-solutions.local/login.php');
}
?>