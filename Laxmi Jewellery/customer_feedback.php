<!-- 10.39 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<style type="text/css">
	a
	{
		color: black;
		font-weight: bold;
	}
	img
	{
		height: 220px;
	}


	.card
	{
		border:2px solid pink;
		margin-top: 15px;

	}
	.btn-primary
	{
		background: pink;
		color: blue;
		font-weight: bolder;
	}
</style>
</head>
<body>

<?php include_once "nav.php";  ?>

<div style="background: url(http://cdn.shopify.com/s/files/1/0658/3225/5726/collections/NLJ_Banner05_1546x546_1.webp?v=1664262993);background-size: 130%;height: 350px;background-repeat: no-repeat;background-attachment: fixed;"">

<br><br><br>
	<h1 style="text-align: center;color: white;text-shadow: 2px 2px blue;">
LAXMI JEWELLERS
	</h1>

</div>


<div class="container" style="margin-top: -50px;">
	<div class="row" >
		<div class="col-md-7" >		 	
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.335437700155!2d74.74822381415636!3d19.952390686591215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc6dd9267655a1%3A0x34a113d8adf82384!2sMIT%20Polytechnic%20College%20Rotegaon!5e0!3m2!1sen!2sin!4v1678513822932!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
		</div>
		<div class="col-md-5">			
		<form action="" method="POST">
			<div class="jumbotron" style="border:2px solid #cc3300;">
				<h2>We need your Feedback </h2>
				<input type="text" name="txt_name" class="form-control" placeholder="Enter Your Name" style="border-color: #cc3300;">
				<br>

				<input type="text" name="txt_mobile" class="form-control" placeholder="Enter mobile number" style="border-color: #cc3300;">
				<br>
				
				<textarea class="form-control" name="txt_feedback" style="border-color: #cc3300;"></textarea>
				<br>

				<br>
				<input type="submit" name="btn_submit" value="Submit Feedback" class="btn btn-info" style="background: #cc3300">
				<br><br>
			</form>
			</div>
		</div>
		

	</div> <!-- row closed -->	
</div>


</body>
</html>

<?php

error_reporting(0);
$con=mysqli_connect("localhost","root","","laxmi");

if(isset($_POST['btn_submit']))
{
  
  mysqli_query($con,"insert into feedback(name,mobile,feedback)values('".$_POST['txt_name']."','".$_POST['txt_mobile']."','".$_POST['txt_feedback']."')");

 
 echo "<script>alert('Feedback submitted successfully');</script>";
  echo "
<script>window.location='index.php' </script>
  ";
}



?>