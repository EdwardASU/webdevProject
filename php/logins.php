<?php
include_once "login.php";
include_once "config.php";
$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * from user where username = '$username' and password = '$password'";
$result = $conn->query($sql);
if(!$result) die('database');
if($result->num_rows>0){
    $data = $result->fetch_array(MYSQLI_ASSOC);
    session_start();
    $_SESSION['type'] = $data['type'];
    $_SESSION['username'] = $username;
    echo "success";
}
else{
    echo "not";
}
?>