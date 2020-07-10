<?php

session_start();


$email = $_SESSION['email'];


// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
//     header("location:login.php");
//     exit;
// }


if(!isset($_SESSION['email'])){
    header("location:login.php");
    exit;
}




?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Life Style Store</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Navbar -->
    <?php
    include 'includes/header.php';
    ?>



    <div id="content">
        <div class="container-fluid decor_bg" id="login-panel">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Change Password</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><i></i>
                                <p>
                                    <form role="form" action="homepage script/cp.php" method="POST">
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Old Password" name="password1" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="New Password" name="password2" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="password3" required>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success btn-block">Change</button><br><br>
                                    </form><br />
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include 'includes/footer.php';
    ?>






</body>

</html>