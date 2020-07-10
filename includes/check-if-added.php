<?php

require 'common.php';

?>

<?php



$_SESSION['id']= $user_id;
// $user_id=$_SESSION['id'];

function check_if_added_to_cart($item_id){


    $sql="SELECT * FROM store.user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
    $sql_result=mysqli_query($con,$sql);

    if(mysqli_num_rows($sql_result)>=1){

        return 1;
    }
    else{
        return 0;
    }






}

?>
