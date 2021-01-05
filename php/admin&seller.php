<?php
include_once "login.php";
$register = "INSERT into user (username,password,fName,address1,address2,address3,postCode,state,phone,email,type) value('admin', 'admin','admin','admin','admin','admin','000000','admin','admin','admin', 'admin')";
$result1 = $conn->query($register);
$register2 = "INSERT into user (username,password,fName,address1,address2,address3,postCode,state,phone,email,type) value('seller', 'seller','seller','seller','seller','seller','000000','seller','seller','seller', 'seller')";
$result2 = $conn->query($register2);

?>