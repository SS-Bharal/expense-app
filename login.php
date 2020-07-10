
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



    <!-- Content  -->

    <div id="content">
        <div class="container-fluid decor_bg" id="login-panel">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><i></i>
                                <p>
                                    <form role="form" action="login system script/login-script.php" method="POST">



                                        <label for="email">Email:</label>
                                        <div class="form-group">
                                            <input type="email" id="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email"  maxlength="30" required="true">
                                        </div>

                                        <label for="password">Password:</label>
                                        <div class="form-group">
                                            <input type="password" id="password" class="form-control" placeholder="Password" name="password"  maxlength="20" required pattern=".{8,}">
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-block btn-success">Login</button><br><br>
                                    </form><br />
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="sign-up.php">click here to signup</a></p>
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

