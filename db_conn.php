<?php


$host="localhost:3307";
$user="root";
$password="";
$db="newdb";

$con = mysqli_connect($host, $user, $password);
mysqli_select_db($con, 'newdb');

?>