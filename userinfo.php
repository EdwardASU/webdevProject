<?php
session_start();
include_once 'php/login.php';
include_once 'php/config.php';

$username = $_SESSION['username'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your info</title>
</head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/userfunction.js"></script>
<link rel="stylesheet" type="text/css" href="css/user.css">
<body onload="getInfo(<?php echo $username ?>)">
    <div class="user_border" id="userInfo">
        
    </div>
</body>
</html>