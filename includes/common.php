<?php


$server = "localhost";
$username = "root";
$password = "";
$database= "store";

// Create a database connection
$con = mysqli_connect($server, $username, $password,$database) or die (mysqli_error($con));

// echo "Database connected successfully";

// Session started now
session_start();






?>