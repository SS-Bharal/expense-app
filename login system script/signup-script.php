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




// collecting post variables
// $id = mysqli_real_escape_string($con, $_POST['id']);
$name = mysqli_real_escape_string($con, $_POST['name']);

$email = mysqli_real_escape_string($con, $_POST['email']);

// pattern for email address 

// $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
// if (!preg_match($regex_email, $email)) {
//     echo "<script>alert('Email adress pattern does not match.')</script>";
//     echo ("<script>location.href='../sign-up.php'</script>");
// }

$password = mysqli_real_escape_string($con, $_POST['password']);

// pattern for strong password 

// $uppercase = preg_match('@[A-Z]@', $password);
// $lowercase = preg_match('@[a-z]@', $password);
// $number    = preg_match('@[0-9]@', $password);

// if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
//     echo "<script>alert('Your Password is not strong please include minimum an uppercase,lowercase,number and password length minimum of 8 characters. ')</script>";
//     echo ("<script>location.href='../sign-up.php'</script>");
   
    
// }



$c_password = mysqli_real_escape_string($con, $_POST['c_password']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);



//  fetching existing email from database
$sql = "SELECT * FROM `int_expense`.`int_users` WHERE email='$email'";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
$num = mysqli_num_rows($sql_result);

if ($num < 1) {

    if ($password == $c_password) {



        $password = md5($password);



        // $sql = "INSERT INTO temp_db.abc(`id`,`name`,`email`) VALUES (`$id`,`$name`,`$email`)";
        $sql = "INSERT INTO `int_expense`.`int_users` (`name`, `email`,`password`,`contact`) VALUES ('$name', '$email','$password','$contact');";

        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        echo "<script>alert('Your account is created successfully. Please Login')</script>";
        echo ("<script>location.href='../login.php'</script>");
    } else {
        echo "<script>alert('Password does not match. Confirm your password ')</script>";
        echo ("<script>location.href='../sign-up.php'</script>");
    }
} else {
    echo "<script>alert('This Email address already registered Please login.')</script>";
    echo ("<script>location.href='../login.php'</script>");


    // redirecting
    // header("location:../sign-up.php");
}


?>