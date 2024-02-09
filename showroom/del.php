<?php
  $sid=$_GET['sid'];

  $con=mysqli_connect("localhost","root","","showroom");
  
  mysqli_query($con,"delete from customer where id=".$sid."");

     echo"<script>alert('Data Deleted');</script>";
     
  echo "<script>window.location='show.php'</script>";
?>