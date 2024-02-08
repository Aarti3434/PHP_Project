<?php

$id =$_GET['id'];
$status= $_GET['status'];
echo $status;

$con=mysqli_connect("localhost","root","","class");
// $status =1;
mysqli_query($con,"update orders set status = '".$status."' where id=".$id."  ");
echo "<script>window.location='porders.php'</script>";


?>