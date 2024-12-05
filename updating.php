<?php 
include "config.php";
if(isset($_POST["update"])){
    $id      = $_POST["id"];
    $name    = $_POST["name"];
    $price   = $_POST["price"];
    $image   = $_FILES["image"];

    $image_location = $_FILES["image"]['tmp_name'];
    $image_name= $_FILES["image"]["name"];
    $image_up   = "images/".$image_name;
    $q ="UPDATE prod SET  name='$name' ,price='$price', image='$image_up' WHERE id =$id";
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
    header("location:show_products.php");
}

?>