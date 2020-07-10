<?php

session_start();
$email = $_SESSION['email'];

session_unset();
session_destroy();
session_start();

//  session plans differently initialised in all p 
// also isession define for person select or not please check
 
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

$_SESSION['plans'] = 1;





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
    $sql = "SELECT * FROM `int_expense`.`int_budget` WHERE email='$email' AND id='1'";
    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

    $row = mysqli_fetch_array($sql_result);


    $x = 0;


    for ($a = 1; $a <= $row[2]; $a++) {

        // plan database 
        $sql = "SELECT * FROM `int_expense`.`int_distribution_1` WHERE id='$a'";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        $row1 = mysqli_fetch_array($sql_result);

        $x = $x + $row1[2]; //money spent  




    }

    $rem = $row[1] - $x; //remaining amount
    $share = $x / $row[2];

    // $y=distribute


    // refetching
    // plan database 
    $sql = "SELECT * FROM `int_expense`.`int_distribution_1`";
    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

    switch ($row[2]) {
        case 1:
            $row1 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            break;
        case 2:
            $row1 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row1 = mysqli_fetch_array($sql_result);
            $y2 = $row1[2] - $share; //distribution for 1st person
            break;
        case 3:
            $row1 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row1 = mysqli_fetch_array($sql_result);
            $y2 = $row1[2] - $share; //distribution for 1st person
            $row1 = mysqli_fetch_array($sql_result);
            $y3 = $row1[2] - $share; //distribution for 1st person
            break;
        case 4:
            $row1 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row1 = mysqli_fetch_array($sql_result);
            $y2 = $row1[2] - $share; //distribution for 1st person
            $row1 = mysqli_fetch_array($sql_result);
            $y3 = $row1[2] - $share; //distribution for 1st person
            $row1 = mysqli_fetch_array($sql_result);
            $y4 = $row1[2] - $share; //distribution for 1st person
            break;
        case 5:
            $row1 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row2 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row3 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row4 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row5 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            break;
        case 6:
            $row1 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row2 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row3 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row4 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row5 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row6 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            break;
        case 7:
            $row1 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row2 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row3 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row4 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row5 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row6 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row7 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            break;
        case 8:
            $row1 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row2 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row3 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row4 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person1
            $row5 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row6 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row7 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row8 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            break;
        case 9:
            $row1 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row2 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row3 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row4 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row5 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row6 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row7 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row8 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row9 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person

            break;
        case 10:
            $row1 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row2 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row3 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row4 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row5 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row6 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row7 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row8 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row9 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            $row10 = mysqli_fetch_array($sql_result);
            $y1 = $row1[2] - $share; //distribution for 1st person
            break;
    }




    ?>



    <div class="container" id="content">


        <div class="row">
            <div class="col-sm-7">
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
                            <p>Remaining amount:<?php echo "&emsp;&emsp;&emsp;&emsp;" . $row1[2]; ?></p>

                            <p>Date:<?php echo "&emsp;" . $row[5];
                                    echo "&ensp;" . "-" . "&ensp;" . $row[6]; ?></p>
                    </div>

                </div>


                <!-- # 2 panels always displayed  -->
                <!-- or displayed on adding and max panel 2 -->

                <?php for ($q = 1; $q <= $row[2]; $q++) {
                    // plan database 
                    $sql = "SELECT * FROM `int_expense`.`int_distribution_1` WHERE id='$q'";
                    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

                    $d = mysqli_fetch_array($sql_result);

                ?>





                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4><?php echo $d[6]; ?>
                                </h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i></i>
                                    <p>Amount:<?php echo "&emsp;&emsp;&emsp;&emsp;" . $d[2]; ?></p>
                                    <p>Paid by:<?php echo "&emsp;&emsp;&emsp;&emsp;" . $d[1]; ?></p>
                                    <p>Paid on:<?php echo "&emsp;" . $d[7];
                                                ?></p>
                                    <!-- <p><a href="#" role="button" class="btn btn-primary btn-block">Don't have bill</a></p> -->
                                    <p><a href="#">Don't have bill</a></p>
                            </div>


                            <!-- <div class="panel-footer"> -->
                            <!-- </div> -->
                        </div>
                    </div>

                <?php
                }
                ?>





            </div>


            <div class="col-sm-4 col-sm-offset-1">

                <br><br><br><br><br>
                <!-- <h1><a href="add-new-plan.php"><span class="glyphicon glyphicon-plus-sign"></span></a></h1> -->
                <p><a href="expense-distribution.php" role="button" class="btn btn-primary btn-block">Distribution</a></p>



                <div class="container-fluid decor_bg" id="login-panel">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>Add new expense </h4>
                                </div>
                                <div class="panel-body">
                                    <p class="text-warning"><i></i>
                                        <p>
                                            <form role="form" action="add-new-expense.php" method="POST">

                                                <label for="budget">Title:</label>
                                                <div class="form-group">
                                                    <input type="text" id="budget" class="form-control" placeholder="Expense Name" name="title1" required>
                                                </div>
                                                <label for="people">Date:</label>
                                                <div class="form-group">
                                                    <input type="date" id="people" class="form-control" placeholder="date" name="date1" required>
                                                </div>
                                                <label for="people">Amount spent:</label>
                                                <div class="form-group">
                                                    <input type="text" id="people" class="form-control" placeholder="amount spent" name="amount" required>
                                                    <br>
                                                    <select name="sel" id="sel">
                                                        <?php
                                                        $sql = "SELECT * FROM `int_expense`.`int_distribution_1`";
                                                        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
                                                        ?>
                                                        <?php
                                                        for ($a = 1; $a <= $row[2]; $a++) {


                                                        ?><?php

                                                            $row1 = mysqli_fetch_array($sql_result);

                                                            ?>

                                                        <option value="<?php $row1[1]; ?>">Name:<?php echo $row1[1]; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                    </select>
                                                    <input type="text" id="people" class="form-control" placeholder="Enter name who pay the expense" name="defid" required>

                                                </div>
                                                <label for="people">Upload Bill:</label>
                                                <div class="form-group">
                                                    <input type="file" id="people" class="form-control" placeholder="Choose file" name="uploadedimage">
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-success btn-block">ADD</button><br><br>
                                            </form>

                                </div>


                            </div>
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