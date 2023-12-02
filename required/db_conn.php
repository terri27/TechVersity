<?php

$host = "localhost";
$database = "weekend_project";
$user = "root";
$password = "";

/*Establishing MYSQL Database connection*/
$conn = mysqli_connect($host,$user,$password,$database);

/*Showing error message when something went wrong while establishing connection*/
if(mysqli_connect_errno()){
    die(mysqli_connect_errno());
}