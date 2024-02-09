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
<?php include_once "nav.php"; ?>
<div style="background: url(http://cdn.shopify.com/s/files/1/0658/3225/5726/collections/NLJ_Banner05_1546x546_1.webp?v=1664262993);background-size: 130%;height: 350px;background-repeat: no-repeat;background-attachment: fixed;">

<br><br><br>
	<h1 style="text-align: center;color: pink;text-shadow: 2px 2px blue;">
<!-- LAXMI JEWELLERS -->
	</h1>

</div>



<div class="container" style="margin-top: -150px;">
	<div class="row">
		<div class="col-md-4">			
			
		</div>
		<div class="col-md-4">			
			<div class="jumbotron" style="border:2px solid #cc3300;background: white;">
				<h2>Admin - Login </h2>
				<form action="#" method="POST">
				<input type="text" name="txt_uname" class="form-control" placeholder="Enter Username">
				<br>
				<input type="password" name="txt_password" class="form-control" placeholder="Enter Password">
				<br>
				<input type="submit" name="btn_login" value="LOGIN" class="btn btn-primary" style="background:#cc3300">
				<br><br>
				</form>
			</div>
		</div>
		<div class="col-md-4">			
			
		</div>
		

	</div> <!-- row closed -->	
</div>


</body>
</html>

<?php
error_reporting(0);

$uname = $_POST['txt_uname'];
$password = $_POST['txt_password'];


if(isset($_POST['btn_login']))
{
	if(($uname == 'Laxmi')&&($password == '2023'))
	{
		echo "<script>window.location='show_products.php'</script>";
	}
	else
	{
		echo "<script>alert('Wrong Credentials');</script>";
	}

}

?>