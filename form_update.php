<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
</head>
<body>
    <?php 
    include "config.php";
    $id =NULL;  
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } 
    $q ="SELECT * FROM prod WHERE id='$id'";
    $r= mysqli_query($con,$q);
    $row= mysqli_fetch_array($r);
    
    ?>
    <center>
        <form action="form_update.php" method="POST" enctype="multipart/form-data">
            <div class="main">
                <h2>Update product</h2>
        
                <input type="text" name="id" value="<?php echo $row['id'];?>"> </br> </br>

                <input type="text" name="name"  value="<?php echo $row['name'];?>"> </br> </br>

                <input type="text" name="price" value="<?php echo $row['price'];?>"> </br>

                <label for="file">Renew</label>
                <input type="file" id='file' name="image"value="<?php echo $row['image'];?>" style="display:none;">
                
                <button name="update" type="submit">update product    </button>
                <br><br> 
            </div>
            <p>Created by altaher</p>
        </form>
<?php 

if(isset($_POST["update"])){
    echo "update";
    $id      = $_POST["id"];
    $name    =  $_POST["name"];
    $price   =  trim($_POST["price"]);
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
    </center>
</body>
</html> 