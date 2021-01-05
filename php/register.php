<?php
include_once "login.php";
include_once "config.php";
$username = $_POST['username'];
$password = sha1($_POST['password']);
$fullname = $_POST['fullname'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address3 = $_POST['address3'];
$postcode = $_POST['postCode'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$email = $_POST['email'];

if(preg_match('/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$email)){
    $check = "SELECT * from user where username = '$username' or email = '$email'";
    $result = $conn->query($check);
    if(!$result) die('database');
    if($result->num_rows>0){
        echo "used";
    }
    else{
        $register = "INSERT into user (username,password,fName,address1,address2,address3,postCode,state,phone,email,type) value('$username', '$password','$fullname','$address1','$address2','$address3','$postcode','$state','$phone','$email', 'user')";
        $result1 = $conn->query($register);
        if(!$result) die('database');
        echo "success";
    }
}
else{
    echo "email";
}
?>