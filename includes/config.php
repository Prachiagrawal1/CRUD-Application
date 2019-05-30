<?php

$host = "localhost";
$db_name = "CRUD";
$user = "demo";
$password = "crud";
$table = "users";

$link = mysqli_connect($host,$user,$password,$db_name) or die("Connection Error :".mysqli_connect_error());

if($link === false)
{
    die("ERROR".mysqli_connect_error());
}

?>
