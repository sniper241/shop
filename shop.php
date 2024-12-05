<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show All Products</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
        .card {
float: right;
margin-right: 30px;
box-shadow: 1px 1px 30px silver;
}
.card img{
width: 100%;
height: 200px;

}
.main{
width: 60%;
}
.base{
  box-shadow: 2px 2px 100px red;
}
.navbar-brand{
    color: black    ;
    text-align: center;
    margin-left: 50%;
    box-shadow: 2px 2px 100px silver;
    
    

}
.navbar-brand:hover{
    color: blue    ;
}
    </style>
</head>
<body>

<nav class="navbar navbar_dark bg-white m-50">
    <a href="card.php" class="btn btn-success" > Card</a>
</nav>
<center>
  <h2>User Page</h2>

</center>

<?php 
include "config.php";
$q = "SELECT * FROM prod";
$r = mysqli_query($con, $q);
while( $row = mysqli_fetch_assoc($r) ){
  echo "<center>
    <div >
      <div class= 'card' style='width: 18rem;'>
        <img src='$row[image]' class='card-img-top'>
        <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[price]</p>
    
        <a href='validation.php?id=$row[id]' class='btn btn-success'>Adding </a>
      </div>

    </div>
  </center>";

}

?>
