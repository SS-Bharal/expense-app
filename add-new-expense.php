<?php

session_start();

$email = $_SESSION['email'];


// i think $row1[0] not defined 

$P = $_SESSION['plans'];
// $defid = $_SESSION['defid'];

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


$defid = mysqli_real_escape_string($con, $_POST['defid']);


?>

<?php

// main selection queries 

//  fetching existing email from database
$sql = "SELECT * FROM `int_expense`.`int_budget` WHERE email='$email' AND id='$P'";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

$row = mysqli_fetch_array($sql_result);


//  fetching database #complete  database
$sql = "SELECT * FROM `int_expense`.`int_distribution_$P`;";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

for ($x = 1; $x <= $row[2]; $x++) {

    ${"n$x"} = mysqli_fetch_array($sql_result);
}



function GetImageExtension($imagetype)
{
    if (empty($imagetype)) return false;
    switch ($imagetype) {
        case 'image/bmp':
            return '.bmp';
        case 'image/gif':
            return '.gif';
        case 'image/jpeg':
            return '.jpg';
        case 'image/png':
            return '.png';
        default:
            return false;
    }
}
if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name = $_FILES["uploadedimage"]["name"];
    $temp_name = $_FILES["uploadedimage"]["tmp_name"];
    $imgtype = $_FILES["uploadedimage"]["type"];
    $ext = GetImageExtension($imgtype);
    $imagename = date("d-m-Y") . "-" . time() . $ext;
    $target_path = "img/" . $imagename;
    if (move_uploaded_file($temp_name, $target_path)) {
        // Make a query to save data to your database.
    }
}




?>


<?php

$title1 = mysqli_real_escape_string($con, $_POST['title1']);
$date1 = mysqli_real_escape_string($con, $_POST['date1']);


$amount = mysqli_real_escape_string($con, $_POST['amount']);


//  fetching database #complete  database
$sql = "SELECT * FROM `int_expense`.`int_distribution_$P` WHERE name='$defid';";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
$am = mysqli_fetch_array($sql_result);
$amount = $amount + $am[2];


// // updating data into same table of database 
// $sql = "UPDATE  `int_expense`.`int_distribution_1` SET `money`='$amount',`title`='$title1',`date1`='$date1' WHERE name=$row1[0];";
// $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));






$x = 0;
for ($a = 1; $a <= $row[2]; $a++) {

    // plan database 
    $sql = "SELECT * FROM `int_expense`.`int_distribution_$P` WHERE id='$a';";
    $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

    $row2 = mysqli_fetch_array($sql_result);

    $x = $x + $row2[2]; //money spent




}

$rem = $row[1] - $x; //remaining amount
$share = $x / $row[2];


// updating data into same table of database 
$sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `money`='$amount',`remaining`='$rem',`share`='$share',`title`='$title1',`date`='$date1' WHERE name='$defid';";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

// $row1 = mysqli_fetch_array($sql_result);
// $y1 = $n1[2] - $share; //distribution for 1st person
// $row1 = mysqli_fetch_array($sql_result);
// $y2 = $n2[2] - $share; //distribution for 1st person

// $y=distribute
// plan database 
$sql = "SELECT * FROM `int_expense`.`int_distribution_$P`";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));



switch ($row[2]) {
    case 1:
        $row1 = mysqli_fetch_array($sql_result);
        $y1 = $n1[2] - $share; //distribution for 1st person
        break;
    case 2:
        $row1 = mysqli_fetch_array($sql_result);
        $y1 = $n1[2] - $share; //distribution for 1st person
        $row1 = mysqli_fetch_array($sql_result);
        $y2 = $n2[2] - $share; //distribution for 1st person
        break;
    case 3:
        $row1 = mysqli_fetch_array($sql_result);
        $y1 = $n1[2] - $share; //distribution for 1st person
        $row1 = mysqli_fetch_array($sql_result);
        $y2 = $n2[2] - $share; //distribution for 1st person
        $row1 = mysqli_fetch_array($sql_result);
        $y3 = $n3[2] - $share; //distribution for 1st person
        break;
    case 4:
        $row1 = mysqli_fetch_array($sql_result);
        $y1 = $n1[2] - $share; //distribution for 1st person
        $row1 = mysqli_fetch_array($sql_result);
        $y2 = $n2[2] - $share; //distribution for 1st person
        $row1 = mysqli_fetch_array($sql_result);
        $y3 = $n3[2] - $share; //distribution for 1st person
        $row1 = mysqli_fetch_array($sql_result);
        $y4 = $n4[2] - $share; //distribution for 1st person
        break;
    case 5:
        $row1 = mysqli_fetch_array($sql_result);
        $y1 = $n1[2] - $share; //distribution for 1st person
        $row2 = mysqli_fetch_array($sql_result);
        $y1 = $n2[2] - $share; //distribution for 1st person
        $row3 = mysqli_fetch_array($sql_result);
        $y1 = $n3[2] - $share; //distribution for 1st person
        $row4 = mysqli_fetch_array($sql_result);
        $y1 = $n4[2] - $share; //distribution for 1st person
        $row5 = mysqli_fetch_array($sql_result);
        $y1 = $n5[2] - $share; //distribution for 1st person
        break;
    case 6:
        $row1 = mysqli_fetch_array($sql_result);
        $y1 = $n1[2] - $share; //distribution for 1st person
        $row2 = mysqli_fetch_array($sql_result);
        $y1 = $n2[2] - $share; //distribution for 1st person
        $row3 = mysqli_fetch_array($sql_result);
        $y1 = $n3[2] - $share; //distribution for 1st person
        $row4 = mysqli_fetch_array($sql_result);
        $y1 = $n4[2] - $share; //distribution for 1st person
        $row5 = mysqli_fetch_array($sql_result);
        $y1 = $n5[2] - $share; //distribution for 1st person
        $row6 = mysqli_fetch_array($sql_result);
        $y1 = $n6[2] - $share; //distribution for 1st person
        break;
    case 7:
        $row1 = mysqli_fetch_array($sql_result);
        $y1 = $n1[2] - $share; //distribution for 1st person
        $row2 = mysqli_fetch_array($sql_result);
        $y1 = $n2[2] - $share; //distribution for 1st person
        $row3 = mysqli_fetch_array($sql_result);
        $y1 = $n3[2] - $share; //distribution for 1st person
        $row4 = mysqli_fetch_array($sql_result);
        $y1 = $n4[2] - $share; //distribution for 1st person
        $row5 = mysqli_fetch_array($sql_result);
        $y1 = $n5[2] - $share; //distribution for 1st person
        $row6 = mysqli_fetch_array($sql_result);
        $y1 = $n6[2] - $share; //distribution for 1st person
        $row7 = mysqli_fetch_array($sql_result);
        $y1 = $n7[2] - $share; //distribution for 1st person
        break;
    case 8:
        $row1 = mysqli_fetch_array($sql_result);
        $y1 = $n1[2] - $share; //distribution for 1st person
        $row2 = mysqli_fetch_array($sql_result);
        $y1 = $n2[2] - $share; //distribution for 1st person
        $row3 = mysqli_fetch_array($sql_result);
        $y1 = $n3[2] - $share; //distribution for 1st person
        $row4 = mysqli_fetch_array($sql_result);
        $y1 = $n4[2] - $share; //distribution for 1st person1
        $row5 = mysqli_fetch_array($sql_result);
        $y1 = $n5[2] - $share; //distribution for 1st person
        $row6 = mysqli_fetch_array($sql_result);
        $y1 = $n6[2] - $share; //distribution for 1st person
        $row7 = mysqli_fetch_array($sql_result);
        $y1 = $n7[2] - $share; //distribution for 1st person
        $row8 = mysqli_fetch_array($sql_result);
        $y1 = $n8[2] - $share; //distribution for 1st person
        break;
    case 9:
        $row1 = mysqli_fetch_array($sql_result);
        $y1 = $n1[2] - $share; //distribution for 1st person
        $row2 = mysqli_fetch_array($sql_result);
        $y1 = $n2[2] - $share; //distribution for 1st person
        $row3 = mysqli_fetch_array($sql_result);
        $y1 = $n3[2] - $share; //distribution for 1st person
        $row4 = mysqli_fetch_array($sql_result);
        $y1 = $n4[2] - $share; //distribution for 1st person
        $row5 = mysqli_fetch_array($sql_result);
        $y1 = $n5[2] - $share; //distribution for 1st person
        $row6 = mysqli_fetch_array($sql_result);
        $y1 = $n6[2] - $share; //distribution for 1st person
        $row7 = mysqli_fetch_array($sql_result);
        $y1 = $n7[2] - $share; //distribution for 1st person
        $row8 = mysqli_fetch_array($sql_result);
        $y1 = $n8[2] - $share; //distribution for 1st person
        $row9 = mysqli_fetch_array($sql_result);
        $y1 = $n9[2] - $share; //distribution for 1st person

        break;
    case 10:
        $row1 = mysqli_fetch_array($sql_result);
        $y1 = $n1[2] - $share; //distribution for 1st person
        $row2 = mysqli_fetch_array($sql_result);
        $y1 = $n2[2] - $share; //distribution for 1st person
        $row3 = mysqli_fetch_array($sql_result);
        $y1 = $n3[2] - $share; //distribution for 1st person
        $row4 = mysqli_fetch_array($sql_result);
        $y1 = $n4[2] - $share; //distribution for 1st person
        $row5 = mysqli_fetch_array($sql_result);
        $y1 = $n5[2] - $share; //distribution for 1st person
        $row6 = mysqli_fetch_array($sql_result);
        $y1 = $n6[2] - $share; //distribution for 1st person
        $row7 = mysqli_fetch_array($sql_result);
        $y1 = $n7[2] - $share; //distribution for 1st person
        $row8 = mysqli_fetch_array($sql_result);
        $y1 = $n8[2] - $share; //distribution for 1st person
        $row9 = mysqli_fetch_array($sql_result);
        $y1 = $n9[2] - $share; //distribution for 1st person
        $row10 = mysqli_fetch_array($sql_result);
        $y1 = $n10[2] - $share; //distribution for 1st person
        break;
}


// updating switchcase 

$sql = "SELECT * FROM `int_expense`.`int_distribution_$P`";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
for ($a = 1; $a <= $row[2]; $a++) {

    ${"roww$a"} = mysqli_fetch_array($sql_result);
}


switch ($row[2]) {
    case 1:

        // updating data into same table of database 
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y1' WHERE id='$roww1[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        break;
    case 2:
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y1' WHERE id='$roww1[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y2' WHERE id='$roww2[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));



        break;
    case 3:
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y1' WHERE id='$roww1[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y2' WHERE id='$roww2[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y3' WHERE id='$roww3[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 4:
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y1' WHERE id='$roww1[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y2' WHERE id='$roww2[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y3' WHERE id='$roww3[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y4' WHERE id='$roww4[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 5:
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y1' WHERE id='$roww1[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y2' WHERE id='$roww2[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y3' WHERE id='$roww3[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y4' WHERE id='$roww4[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y5' WHERE id='$roww5[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 6:
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y1' WHERE id='$roww1[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y2' WHERE id='$roww2[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y3' WHERE id='$roww3[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y4' WHERE id='$roww4[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y5' WHERE id='$roww5[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y6' WHERE id='$roww6[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 7:
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y1' WHERE id='$roww1[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y2' WHERE id='$roww2[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y3' WHERE id='$roww3[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y4' WHERE id='$roww4[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y5' WHERE id='$roww5[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y6' WHERE id='$roww6[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y7' WHERE id='$roww7[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 8:
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y1' WHERE id='$roww1[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y2' WHERE id='$roww2[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y3' WHERE id='$roww3[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y4' WHERE id='$roww4[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y5' WHERE id='$roww5[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y6' WHERE id='$roww6[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y7' WHERE id='$roww7[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y8' WHERE id='$roww8[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 9:
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y1' WHERE id='$roww1[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y2' WHERE id='$roww2[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y3' WHERE id='$roww3[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y4' WHERE id='$roww4[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y5' WHERE id='$roww5[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y6' WHERE id='$roww6[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y7' WHERE id='$roww7[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y8' WHERE id='$roww8[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y9' WHERE id='$roww9[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));


        break;
    case 10:
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y1' WHERE id='$roww1[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y2' WHERE id='$roww2[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y3' WHERE id='$roww3[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y4' WHERE id='$roww4[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y5' WHERE id='$roww5[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y6' WHERE id='$roww6[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y7' WHERE id='$roww7[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y8' WHERE id='$roww8[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y9' WHERE id='$roww9[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql = "UPDATE  `int_expense`.`int_distribution_$P` SET `distribute`='$y10' WHERE id='$roww10[0]';";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
}





echo "<script>alert('Data Inserted successfully.')</script>";
echo ("<script>location.href='p$P.php'</script>");








?>