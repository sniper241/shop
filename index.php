<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        
    </style>
</head>
<body>
    
    <center style="  margin-left: 400px; box-shadow: 1px 1px 10px silver;width:60%; "     >
        <form style="  height: 300;" action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="main">
                <h2>online shop</h2>
                <img src="images/shop.jfif" alt="logo" width="250px"> </br>

                <input  type="text" name="name"style="   margin-top: 60px;" placeholder="name"> </br> </br>

                <input type="text" name="price" placeholder="price  "> </br>

                <label for="file" class="btn btn-success">Add image</label>
                <input type="file" id='file' name="image" style="display:none;">
                
                <button name="upload" class="btn btn-success">upload product    </button>
                <br><br> 
                <a href="show_products.php" class="btn btn-success"> Show all products</a>
                <a class="btn btn-danger"     href="shop.php"> shop</a>
            </div>
            <p>Created by altaher</p>
        </form>
    </center>
</body>
</html> 