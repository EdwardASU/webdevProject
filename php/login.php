<?php
 $host =  'localhost';
 $dbpw = '';
 $db = 'apple';
 $un = 'root';
 $conn = new mysqli($host,$un,$dbpw,$db);
if($conn->connect_error) die("Fatal Error");
?>