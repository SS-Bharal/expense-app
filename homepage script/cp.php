<?php

session_start();
$email = $_SESSION['email'];


// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$database = "int_expense";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);






$old_password = mysqli_real_escape_string($con, $_POST['password1']);
$password = mysqli_real_escape_string($con, $_POST['password2']);
$c_password = mysqli_real_escape_string($con, $_POST['password3']);



$sql = "SELECT * FROM `int_expense`.`int_users` WHERE email='$email'";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
// $num = mysqli_num_rows($sql_result);
$row = mysqli_fetch_array($sql_result);

$pass = md5($old_password);





if ($pass == $row[3]) {

    if ($password == $c_password) {




        $password = md5($password);


        // updating data into same table of database 
        $sql = "UPDATE  `int_expense`.`int_users` SET `password`='$password' WHERE email='$email';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));


        echo "<script>alert('Password changed successfully.')</script>";
        echo ("<script>location.href='../change-password.php'</script>");
    } else {
        echo "<script>alert(' confirm Password does not match. Enter correct ppassword. ')</script>";
        echo ("<script>location.href='../change-password.php'</script>");
    }
} else {
    echo "<script>alert('Old password does not match.')</script>";
    echo ("<script>location.href='../change-password.php'</script>");
}
 
    // redirecting
    // header("location:../sign-up.php");
