<?php

$id =$_GET['id'];

$con=mysqli_connect("localhost","root","","laxmi");
$status = 1;
mysqli_query($con,"update orders set status = ".$status." where id=".$id."  ");

 echo "<script>window.location='orders.php'</script>";


?>