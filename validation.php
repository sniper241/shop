<?php 
//echo "validation.php";
include "config.php";
$id = $_GET['id'];
$q = "SELECT * FROM prod WHERE  id=$id";
$r= mysqli_query($con, $q);
$row=mysqli_fetch_array($r);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Confirme buying</title>

</head>
<style>
    input{
        display: none;
    }
    .main{
        box-shadow: 1px 1px 10px silver;
        background-color: gray;
    }
</style>
<body>
    <center>
        <div class="main">
            <h2>Are you sure you want to buy</h2>
            <form action="insert_card.php" method="POST">
                <input type="text" placeholder="id"name="id" value=    "<?php echo $row['id'];?>">
                <input type="text"placeholder="name"name="name"value=  "<?php echo $row['name'];?>">
                <input type="text"placeholder="price"name="price"value="<?php echo $row['price'];?>">
                <button name="add" type="submit" class="btn btn-success" >confirm</button>
            </form>
            <a href="shop.php"> SHOP</a>
        </div>
    </center>
</body>
</html>