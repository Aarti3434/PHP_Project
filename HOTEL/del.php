<?php

   $sid=$_GET['studid'];

   $con = mysqli_connect("localhost","root","","hotel");

   mysqli_query($con, "delete from login where sid=".$sid." ");

   echo "<script> window.location='show.php' </script>";

?>