<?php

$host = "localhost";
$userName = "root";
$pass = "";
$dbName = "dha";

$conn = mysqli_connect($host,$userName,$pass,$dbName);

if(!$conn){
    echo "<script>alert('Error Establishing DataBase Connection');</script>";
}

// foreach(range(111,130) as $i){

 
//     $q = "INSERT INTO `sub_sub_sector`(`sub_sub_sector_name`) VALUES ('$i')";
//     $done = mysqli_query($conn,$q);
//     if($done){
//         echo $i."<br>";
//     }
// }
?>