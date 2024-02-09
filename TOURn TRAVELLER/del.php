

<?php
  $tid = $_GET['tid'];

error_reporting();
$con=mysqli_connect("localhost","root","","turism");



mysqli_query($con,"delete from destination where tid = ".$tid." ");

header("Location:show.php");

?>