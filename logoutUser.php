<?php
session_start();

$done = session_destroy();

if($done){
    header("location:login.php");
}

?>