<?php

include_once "login.php";
$sql = "CREATE TABLE user(
    uid SMALLINT NOT NULL AUTO_INCREMENT,
    username varchar(32) not null,
    password varchar(255) not null,
    fName varchar(32) not null,
    address1 varchar(255) not null,
    address2 varchar(255) not null,
    address3 varchar(255) not null,
    postCode int(8) not null,
    state varchar(32) not null,
    phone varchar(32) not null,
    email varchar(32) not null,
    type varchar(32) not null,
    primary key(uid))";

    $result = $conn->query($sql);
    if(!$result) die("DATABASE ACESS FAILED");

?>