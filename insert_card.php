<?php 
include "config.php";
if(isset($_POST["add"])){
    $name = $_POST['name'];     
    $price = $_POST['price'];
    $q ="INSERT INTO card1 (name   ,price) VALUES  ('$name' ,'$price') ";
    $r= mysqli_query($con, $q);
   
}
header("location:card.php");



?>