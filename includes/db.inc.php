<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "feedback";

$connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(!$connection){
    die("Connection failed: ".mysqli_connect_error());
}