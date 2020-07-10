<?php

session_start();

$email = $_SESSION['email'];



?>





<!-- HTML Code Started -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup | Life Style Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>


    <!-- Header -->
    <?php
    include 'includes/header.php'
    ?>
    <!-- end Header  -->




    <?php


    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "int_expense";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $database);


    $email = $_SESSION['email'];





    // //  fetching existing email from database
    // $sql = "SELECT * FROM `int_expense`.`int_budget` WHERE email='$email'";
    // $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

    // $row = mysqli_fetch_array($sql_result);

    // // echo $row[0]."<br>";
    // // echo $row[1]."<br>";
    // // echo $row[2];



    //  fetching existing email from database
    $sql = "SELECT * FROM `int_expense`.`int_budget` WHERE email='$email'";
    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));


    $a = mysqli_num_rows($sql_result);
    echo $a . "<br>";

    for ($x = 1; $x <= $a; $x++) {
        $row = mysqli_fetch_array($sql_result);
    }






    ?>






    <!-- Content  -->
    <div class="container-fluid decor_bg" id="content">

        <div class="row">
            <div class="container">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <!-- <h2></h2> -->


                    <form action="homepage script/plandet.php" method="POST">

                        <label for="title">Title:</label>
                        <div class="form-group">
                            <input class="form-control" placeholder="Enter title (ex. trip to goa)" name="title" id="title" required maxlength="30">
                        </div>

                        DATE:
                        <br>

                        <label for="date">From:</label>
                        <div class="form-group inline">
                            <input type="date" class="form-control" id="date" name="dfrom" min="2020-01-01" max="2030-01-01" required>
                        </div>

                        <label for="date">To:</label>
                        <div class="form-group inline">
                            <input type="date" class="form-control" id="date" name="dto" min="2020-01-01" max="2030-01-01" required>
                        </div>
                        <br>


                        <label for="budget">Initial budget:</label>
                        <div class="form-group">
                            <input class="form-control" placeholder="<?php echo $row[1]; ?>" name="name" id="budget" required maxlength="30" disabled>
                        </div>
                        <label for="people">number of people:</label>
                        <div class="form-group">
                            <input class="form-control" placeholder="<?php echo $row[2]; ?>" name="name" id="people" required maxlength="30" disabled>
                        </div>



                        <?php


                        switch ($row[2]) {
                            case 1:
                                echo '<label for="name">Person1:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person1" id="name" required maxlength="30">
                                </div>';


                                break;

                            case 2:
                                echo '<label for="name">Person1:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person1" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person2:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person2" id="name" required maxlength="30">
                                </div>';



                                break;



                            case 3:
                                echo '<label for="name">Person1:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person1" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person2:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person2" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person3:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person3" id="name" required maxlength="30">
                                </div>';

                                break;
                            case 4:
                                echo '<label for="name">Person1:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person1" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person2:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person2" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person3:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person3" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person4:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person4" id="name" required maxlength="30">
                                </div>';



                                break;
                            case 5:

                                echo '<label for="name">Person1:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person1" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person2:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person2" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person3:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person3" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person4:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person4" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person5:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person5" id="name" required maxlength="30">
                                </div>';


                                break;
                            case 6:
                                echo '<label for="name">Person1:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person1" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person2:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person2" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person3:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person3" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person4:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person4" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person5:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person5" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person6:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person6" id="name" required maxlength="30">
                                </div>';



                                break;
                            case 7:
                                echo '<label for="name">Person1:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person1" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person2:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person2" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person3:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person3" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person4:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person4" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person5:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person5" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person6:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person6" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person7:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person7" id="name" required maxlength="30">
                                </div>';




                                break;
                            case 8:
                                echo '<label for="name">Person1:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person1" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person2:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person2" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person3:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person3" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person4:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person4" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person5:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person5" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person6:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person6" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person7:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person7" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person8:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person8" id="name" required maxlength="30">
                                </div>';

                                break;
                            case 9:
                                echo '<label for="name">Person1:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person1" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person2:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person2" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person3:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person3" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person4:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person4" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person5:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person5" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person6:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person6" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person7:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person7" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person8:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person8" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person9:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person9" id="name" required maxlength="30">
                                </div>';

                                break;
                            case 10:
                                echo '<label for="name">Person1:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person1" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person2:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person2" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person3:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person3" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person4:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person4" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person5:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person5" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person6:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person6" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person7:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person7" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person8:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person8" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person9:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person9" id="name" required maxlength="30">
                                </div>';
                                echo '<label for="name">Person10:</label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="person name" name="person10" id="name" required maxlength="30">
                                </div>';
                               
                                break;





                            default:
                                echo "please enter less no. of peoples";
                        }



                        ?>







                        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
    include 'includes/footer.php';
    ?>




</body>

</html>