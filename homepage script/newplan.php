<?php


// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$database = "int_expense";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);




// collecting post variables
// $id = mysqli_real_escape_string($con, $_POST['id']);
$budget = mysqli_real_escape_string($con, $_POST['budget']);

$persons = mysqli_real_escape_string($con, $_POST['people']);


session_start();

$email=$_SESSION['email'];

// $sql = "INSERT INTO `int_expense`.`int_budget` (`budget`, `persons`,`email`) VALUES ('$budget', '$persons','$email';";
$sql = "INSERT INTO `int_budget` (`budget`, `persons`, `email`) VALUES ('$budget', '$persons', '$email');";

$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));


// echo "<script>alert('Your account is created successfully. Please Login')</script>";
// echo ("<script>location.href='../login.php'</script>");


header("location:../plan-details.php");

?>

