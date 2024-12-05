<?php 
echo "you are in delete card page";
include "config.php";
$id =$_GET['id'];   
$q = "DELETE FROM card1 WHERE id = $id ";
$r = mysqli_query($con, $q);
header("location:card.php");
?>