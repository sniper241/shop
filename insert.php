<?php 
include "config.php";
if(isset($_POST["upload"])){
    $name    = $_POST["name"];
    $price   = $_POST["price"];
    $image   = $_FILES["image"];
    $image_location  = $_FILES["image"]['tmp_name'];
    $image_name      = $_FILES["image"]["name"];
    $image_up         = "images/" . $image_name;
    $q ="INSERT INTO prod (name ,price,image) VALUES('$name' ,'$price','$image_up') ";
    $r = mysqli_query($con, $q);
    if(move_uploaded_file($image_location   ,$image_up)){
        echo "<script>
            alert('product is added');
        </script>";
        
    }else{
        echo "<script>
            alert('product is not  added');
        </script>";        
    }
    header("location:index.php");
}

?>