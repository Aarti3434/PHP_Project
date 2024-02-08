<?php

error_reporting(0);
$con=mysqli_connect("localhost","root","","class");


$id = $_GET['id'];

mysqli_query($con,"delete from products where id = ".$id." ");

header("Location:add_products.php");

?>