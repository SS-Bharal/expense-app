
<?php

session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
    //     header("location:home.php");
    //     exit;
    // }
    
    
    if(isset($_SESSION['email'])){
        header("location:home.php");
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

    <!--Header end-->


    

    <!-- content  -->

    <div  id="content">

        <!--Main banner image-->
        <div id="banner_image">
            <div class="container">
                <center>
                    <div id="banner_content">
                        <h2>We help you control your budget</h2>
                        
                        <br>
                        
                        <a href="login.php" class="btn btn-info btn-lg active">Start Today</a>
                    </div>
                </center>
            </div>
        </div>
        <!--Main banner image end-->

       
    </div>

    <!-- content end  -->



    <!--Footer-->

    <?php
    include 'includes/footer.php';
    ?>

    <!--Footer end-->

</body>

</html>