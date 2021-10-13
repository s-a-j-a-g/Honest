<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "honest_userdata";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName); //built-in function in php
 
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}