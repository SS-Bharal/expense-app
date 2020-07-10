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


    <!-- Content  -->
    <div class="container-fluid decor_bg" id="content">

        <div class="row">
            <div class="container">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h2>SIGN UP</h2>
                    <br>

                    <form action="login system script/signup-script.php" method="POST">

                        <label for="name">Name:</label>
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" id="name" required  maxlength="20" >
                        </div>

                        <label for="email">Email:</label>
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required="true"  maxlength="30">
                        </div>

                        <label for="password">Password:</label>
                        <div class="form-group">
                            <input type="password" id="password" class="form-control" placeholder="Password" name="password" required pattern=".{8,}" minlength="8"  maxlength="30">
                        </div>

                        <label for="password1">Confirm Password:</label>
                        <div class="form-group">
                            <input type="password" id="password1" class="form-control" placeholder="confirm Password" name="c_password" required minlength="8"  maxlength="30">
                        </div>

                        <label for="phone">Phone number:</label>
                        <div class="form-group">
                            <input type="text" id="phone" class="form-control" placeholder="Contat number" minlength="10" maxlength="10" size="10" name="contact"  required="true">
                        </div>

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