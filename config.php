<?php 
$con = mysqli_connect("localhost","root","","online");
if($con){
    echo ("conected to db");
}else{
    echo ("not conected");
}
?>