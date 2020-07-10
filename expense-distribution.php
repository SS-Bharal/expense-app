<!-- #pending  -->

<?php
// $P = $_SESSION['plans'];

session_start();
$email = $_SESSION['email'];
$P = $_SESSION['plans'];
// session_unset();
// session_destroy();
// session_start(); 



// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$database = "int_expense";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);
//  fetching existing email from database
$sql = "SELECT * FROM `int_expense`.`int_users` WHERE email='$email'";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
$e = mysqli_fetch_array($sql_result);
$_SESSION['email'] = $e[2];




// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$database = "int_expense";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);



//  fetching existing email from database
$sql = "SELECT * FROM `int_expense`.`int_budget` WHERE email='$email' AND id='$P'";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

$row = mysqli_fetch_array($sql_result);


// //  fetching database #complete  database
// $sql = "SELECT * FROM `int_expense`.`int_distribution_$P`;";
// $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

// for ($x = 1; $x <= $row[2]; $x++) {

//     ${"n$x"} = mysqli_fetch_array($sql_result);
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Expense manager app</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</head>

<body style="padding-top: 50px;">
    <!-- Header -->

    <?php
    include 'includes/header.php'
    ?>
    <!-- End header  -->


    <div class="container" id="content">













        <div class="container" id="content">


            <div class="row ">
                <div class="col-sm-6 col-sm-offset-3">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4><?php echo $row[4]; ?> </h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><i></i>
                                <p>
                                    <h4>Initial Budget:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $row[1]; ?></h4>
                                    <br>
                                    <?php

                                    //  fetching database #complete  database
                                    $sql = "SELECT * FROM `int_expense`.`int_distribution_$P`;";
                                    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

                                    for ($x = 1; $x <= $row[2]; $x++) {

                                        $n = mysqli_fetch_array($sql_result);

                                    ?>
                                        <h4><?php echo $n[1] . "&ensp;spent"; ?>:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $n[2]; ?></h4>
                                    <?php
                                    }

                                    ?>
                                    <br>
                                    <?php
                                    $l = 0;
                                    ?>
                                    <?php

                                    //  fetching database #complete  database
                                    $sql = "SELECT * FROM `int_expense`.`int_distribution_$P`;";
                                    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

                                    for ($x = 1; $x <= $row[2]; $x++) {

                                        $n = mysqli_fetch_array($sql_result);
                                        $l = $l + $n[2];


                                    ?>
                                        <h4>Total Amount spent:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $l; ?></h4>

                                    <?php
                                    }

                                    ?>

                                    <h4>Remaining Amount:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $n[3]; ?></h4>
                                    <h4>Individual Shares:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $n[4]; ?></h4>
                                    <br>
                                    <h4>Distribute:</h4>
                                    <?php

                                    //  fetching database #complete  database
                                    $sql = "SELECT * FROM `int_expense`.`int_distribution_$P`;";
                                    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

                                    for ($x = 1; $x <= $row[2]; $x++) {

                                        $n = mysqli_fetch_array($sql_result);


                                    ?>
                                        <h4><?php echo $n[1] . "&ensp;"; ?>:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $n[5]; ?></h4>


                                    <?php
                                    }

                                    ?>


                                    <br>
                                    <a href="p1.php" class="btn btn-primary btn-lg">Go back</a>

                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>



    <!--Footer-->
    <?php
    include 'includes/footer.php';
    ?>
    <!--Footer end-->

</body>

</html>