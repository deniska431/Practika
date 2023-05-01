<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "airport";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if(!$conn){
    die("Не работает".mysqli_connect_error());
}  else {
    "работает";
} ?>