<?php
$host = "localhost";
$user="root";
$password="root";


$databasename = "bancoweblc";
$conn = new mysqli($host,$user,$password,$databasename);


$conn->set_charset("utf8");


if($conn->connect_errno) {
   printf("Connect failed: %s\n", $conn->connect_error);
   exit();
}
?>
