<?php
include_once "login.php";
include_once "config.php";
$username = $_POST['username'];
$email = $_POST['email'];

$permitted_chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $random_string = '';
    for($i = 0; $i < 8; $i++ ){
        $index = rand(0,strlen($permitted_chars) -1);
        $random_string .= $permitted_chars[$index];
    }
    $password = $random_string;
    $passEn = sha1($password);
    $query = "SELECT * from user where username='$username' and email = '$email'";
    $result = $conn->query($query);
    if(!$result){
        echo "database";
    }
    elseif($result->num_rows == 0){
        echo "result";
    }
    else{
        $pass = "UPDATE user set password = '$passEn' where username = '$username'";
        $result2 = $conn->query($pass);
        if(!$result2) die('database');
        $from = "From: edwardtiokenway@gmail.com \r\n";
        $message = "Your new password is ".$password."\r\n"."pls change it at fast\r\n";
        if(mail($email,'PHPBookmark login Information',$message,$from)){
           echo "success";
        }
        else{
            echo "failed";
        }

    }

?>