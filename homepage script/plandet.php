



<?php


// connecting to database
$server = "localhost";
$username = "root";
$password = "";
$database = "int_expense";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);



session_start();
$email = $_SESSION['email'];


// //  fetching existing email from database
// $sql = "SELECT * FROM `int_expense`.`int_budget` WHERE email='$email'";
// $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));


// $a = mysqli_num_rows($sql_result);
// echo $a . "<br>";

// for ($x = 1; $x <= $a; $x++) {
//     $row = mysqli_fetch_array($sql_result);
// }

// $row[0];//id
// $row[1];//budget
// $row[2];//no. of persons
// $row[3];// email


// // creating  simple table 
// $sql1 = "CREATE TABLE `int_expense`.`int_$row[0]` ( `id` INT(11) NOT NULL  , `title` TEXT(255) NOT NULL , `dfrom` DATE NOT NULL , `dto` DATE NOT NULL);";
// $sql_result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));



// making foreign key 
// $sql3="ALTER TABLE `int_expense`.`int_$row[0]` ADD INDEX( `id`);";
// $sql_result3 = mysqli_query($con, $sql3) or die(mysqli_error($con));


// // adding persons columns 

// for ($x = 1; $x <= $row[2]; $x++) {


//     $sql2 = "ALTER TABLE `int_expense`.`int_$row[0]` ADD `person$x` VARCHAR(255) NOT NULL;";
//     $sql_result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
// }


// collecting post variables
// $id = mysqli_real_escape_string($con, $_POST['id']);
// abc 




//  fetching existing email from database
$sql = "SELECT * FROM `int_expense`.`int_budget` WHERE email='$email';";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));


$a = mysqli_num_rows($sql_result);
// echo $a . "<br>";

for ($x = 1; $x <= $a; $x++) {
    $row = mysqli_fetch_array($sql_result);
}

// $row[0];//id
// $row[1];//budget
// $row[2];//no. of persons
// $row[3];// email






$title = mysqli_real_escape_string($con, $_POST['title']);
$dfrom = mysqli_real_escape_string($con, $_POST['dfrom']);
$dto = mysqli_real_escape_string($con, $_POST['dto']);



// // inserting simple data into database
// $sql = "INSERT INTO `int_expense`.`int_budget` (`id`,`title`,`dfrom`,`dto`) VALUES ('$row[0]','$title','$dfrom','$dto')";
// $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

// updating data into same table of database 
$sql = "UPDATE  `int_expense`.`int_budget` SET `title`='$title',`dfrom`='$dfrom',`dto`='$dto' WHERE id=$row[0];";
$sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));



// creating  simple table 
// $sql1 = "CREATE TABLE `int_expense`.`int_distribution_$row[0]` ( `id` INT(11) NOT NULL  , `title` TEXT(255) NOT NULL , `dfrom` DATE NOT NULL , `dto` DATE NOT NULL);";
$sql1 = "CREATE TABLE `int_expense`.`int_distribution_$row[0]` ( `id`INT NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` TEXT NOT NULL , `money` INT NOT NULL , `remaining` INT NOT NULL , `share` INT NOT NULL ,`distribute` INT NOT NULL,`title` TEXT NOT NULL,`date` DATE NOT NULL);";
$sql_result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));


// // #Dikkat 

// for ($x = 1; $x <= $row[2]; $x++) {


//     $y = mysqli_real_escape_string($con, $_POST['person $x']);

//     // data post 
//     $sql = "INSERT INTO `int_expense`.`int_$row[0]` (`person$x`) VALUES ('$y');";
//     $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
// }

// #Dikkat 


switch ($row[2]) {
    case 1:
        $y = mysqli_real_escape_string($con, $_POST['person1']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        break;
    case 2:
        $y = mysqli_real_escape_string($con, $_POST['person1']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person2']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        break;



    case 3:
        $y = mysqli_real_escape_string($con, $_POST['person1']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person2']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person3']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        break;
    case 4:
        $y = mysqli_real_escape_string($con, $_POST['person1']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person2']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person3']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person4']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 5:
        $y = mysqli_real_escape_string($con, $_POST['person1']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person2']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person3']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person4']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person5']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 6:
        $y = mysqli_real_escape_string($con, $_POST['person1']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person2']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person3']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person4']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person5']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person6']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 7:
        $y = mysqli_real_escape_string($con, $_POST['person1']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person2']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person3']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person4']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person5']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person6']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person7']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 8:
        $y = mysqli_real_escape_string($con, $_POST['person1']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person2']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person3']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person4']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person5']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person6']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person7']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person8']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 9:
        $y = mysqli_real_escape_string($con, $_POST['person1']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person2']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person3']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person4']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person5']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person6']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person7']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person8']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person9']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;
    case 10:
        $y = mysqli_real_escape_string($con, $_POST['person1']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person2']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person3']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person4']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person5']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person6']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person7']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person8']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person9']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));
        $y = mysqli_real_escape_string($con, $_POST['person10']);
        $sql = "INSERT INTO `int_expense`.`int_distribution_$row[0]` (`name`) VALUES ('$y');";
        $sql_result = mysqli_query($con, $sql) or die(mysqli_error($con));

        break;





    default:
        echo "please enter less no. of peoples";
}












echo "<script>alert('Data Inserted successfully.')</script>";
echo ("<script>location.href='../home.php'</script>");




?>

