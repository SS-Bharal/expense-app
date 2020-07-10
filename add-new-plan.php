<?php

session_start();


$email = $_SESSION['email'];




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
                            <h4>Create New Plan </h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><i></i>
                                <p>
                                    <form role="form" action="homepage script/newplan.php" method="POST">
                                        
                                        <label for="budget">Initial Budget:</label>
                                        <div class="form-group">
                                            <input type="text"id="budget" class="form-control" placeholder="Initial Budget" name="budget" required>
                                        </div>
                                        <label for="people">How many people you want to add in your group:</label>
                                        <div class="form-group">
                                            <input type="text" id="people" class="form-control" placeholder="number of people" name="people" required>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success btn-block">Next</button><br><br>
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