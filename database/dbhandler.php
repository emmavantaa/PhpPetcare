<?php

$dbServername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "petcaredb";

$conn = mysqli_connect($dbServername, $dbusername, $dbpassword, $dbname);

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>