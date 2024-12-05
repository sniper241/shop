<?php 
//echo "you are in delete page";
include "config.php";
$id =$_GET['id'];
$q = "DELETE FROM prod WHERE id = '$id'";
$r = mysqli_query($con, $q);
if(!$r){
    die(mysqli_error($con));
}else{
    header("location:show_products.php");
}
?>