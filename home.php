<?php

session_start();


if (!isset($_SESSION['email'])) {
    header("location:login.php");
    exit;
}




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



    <?php


    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "int_expense";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $database);


    $email = $_SESSION['email'];





    //  fetching existing email from database
    $sql = "SELECT * FROM `int_expense`.`int_budget` WHERE email='$email'";
    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

    // $row = mysqli_fetch_array($sql_result);

    // echo $row[0]."<br>";
    // echo $row[1]."<br>";
    // echo $row[2];

    // if data not in database 
    ?>

    <?php if (mysqli_num_rows($sql_result) < 1) { ?>


        <div class="container" id="content">

            <div class="row text-center" id="cameras">
                <div class="col-sm-6 home-feature">
                    <h3> You don't have any active plans </h3>
                </div>
                <div class="col-sm-6 home-feature">

                    <div class="col-sm-1 col-sm-offset-2">
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <h3>create new plan</h3>
                        <h1><a href="add-new-plan.php"><span class="glyphicon glyphicon-plus-sign"></span></a></h1>
                    </div>
                </div>
            </div>

        </div>









    <?php
    } else { ?>


        <div class="container" id="content">
            <h1>
                Your Plans

            </h1>

            <div class="row">
                <div class="col-sm-9">
                    <?php


                    //  fetching existing email from database
                    $sql = "SELECT * FROM `int_expense`.`int_budget` WHERE email='$email'";
                    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));


                    $a = mysqli_num_rows($sql_result);
                    // echo $a . "<br>";


                    ?>
                    <?php for ($x = 1; $x <= $a; $x++) {



                        $row = mysqli_fetch_array($sql_result);
                    ?>
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4><?php echo $row[4]; ?>
                                        &emsp;
                                        &emsp;
                                        &emsp;
                                        &emsp;
                                        &emsp;
                                        <?php
                                        echo '<span class="glyphicon glyphicon-user"></span>';
                                        echo $row[2];  ?></h4>
                                </div>
                                <div class="panel-body">
                                    <p class="text-warning"><i></i>
                                        <p>Budget:<?php echo "&emsp;&emsp;&emsp;&emsp;" . $row[1]; ?></p>
                                        <p>Date:<?php echo "&emsp;" . $row[5];
                                                echo "&ensp;" . "-" . "&ensp;" . $row[6]; ?></p>
                                        <?php
                                        switch($row[0]){
                                            case 1:
                                                echo'<p><a href="p1.php" role="button" class="btn btn-primary btn-block">View Plan</a></p>';
                                            break;
                                            case 2:
                                                echo'<p><a href="p2.php" role="button" class="btn btn-primary btn-block">View Plan</a></p>';
                                            break;
                                            case 3:
                                                echo'<p><a href="p3.php" role="button" class="btn btn-primary btn-block">View Plan</a></p>';
                                            break;
                                            case 4:
                                                echo'<p><a href="p4.php" role="button" class="btn btn-primary btn-block">View Plan</a></p>';
                                            break;
                                            case 5:
                                                echo'<p><a href="p5.php" role="button" class="btn btn-primary btn-block">View Plan</a></p>';
                                            break;
                                            case 6:
                                                echo'<p><a href="p6.php" role="button" class="btn btn-primary btn-block">View Plan</a></p>';
                                            break;

                                        }        
                                        ?>
                                </div>


                                <!-- <div class="panel-footer"> -->
                                <!-- </div> -->
                            </div>
                        </div>

                    <?php
                    }
                    ?>





                </div>

                <div class="col-sm-1 col-sm-offset-2">
                    <br><br><br><br><br>
                    <br><br><br><br><br>
                    <br><br><br><br><br>
                    <br><br><br><br><br>
                    <h1><a href="add-new-plan.php"><span class="glyphicon glyphicon-plus-sign"></span></a></h1>
                </div>
















            </div>

















        </div>

    <?php
    }
    ?>








































    <!--Footer-->

    <?php
    include 'includes/footer.php';
    ?>

    <!--Footer end-->

</body>

</html>