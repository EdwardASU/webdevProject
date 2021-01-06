<?php
include_once 'login.php';
include_once 'config.php';
$username = $_POST['username'];

if($_POST['oldPass'] != null && $_POST['password1'] != null && $_POST['password2'] != null){
$oldPass = sha1($_POST['oldPass']);
$pass1 = sha1($_POST['password1']);
$pass2 = sha1($_POST['password2']);
if($pass1 == $pass2){
    $check = "SELECT * from user where password = '$oldPass' and username = '$username'";
    $result = $conn->query($check);
    if(!$result) die('database');
    if($result->num_rows>0){
        $pass = "UPDATE user set password = '$pass1' where username = '$username'";
        $result2 = $conn->query($pass);
        if(!$result2) die('database');
        echo "success";
    }
    else{
        echo "wrong";
    }
}
else{
    echo "not same";
}

}
else{
$fullname = $_POST['fullname'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address3 = $_POST['address3'];
$postcode = $_POST['postCode'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$email = $_POST['email'];
if(preg_match('/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$email)){
    $sql = "UPDATE user set fName = '$fullname', address1 = '$address1', address2 = '$address2', address3 = '$address3', postCode = '$postcode', state = '$state', phone = '$phone', email = '$email' where username = '$username'";
    $result3 = $conn->query($sql);
    if(!$result3) die('database');

    echo "success";
}
}
?>