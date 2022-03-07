<?php

$host = "localhost";
$userName = "root";
$pass = "";
$dbName = "dha";

$conn = mysqli_connect($host,$userName,$pass,$dbName);

if(!$conn){
    echo "<script>alert('Error Establishing DataBase Connection');</script>";
}
?>