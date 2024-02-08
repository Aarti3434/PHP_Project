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

<nav class="navbar navbar-expand-md " style="background-color: pink;">
  <a class="navbar-brand" href="#" style="">DELICIOUS ICP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="background: black;">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php" >PRODUCTS</a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="clogin.html">CUSTOMER LOGIN</a>
      </li> -->    
<!--       <li class="nav-item">
        <a class="nav-link" href="contact.html">CONTACT</a>
      </li>
 -->      
    </ul>
  </div>  
</nav>


<div style="background: url(https://www.thehotelbalmoral.co.uk/wp-content/uploads/2012/11/restaurant-chocolate-eclair-hotel-balmoral-torquay-1400x4001.jpg);background-size: 100%;height: 350px;background-repeat: no-repeat;background-attachment: fixed;"">

<br><br><br>
	<h1 style="text-align: center;color: pink;text-shadow: 2px 2px blue;">
		DELICIOUS ICE CREAM PARLOUR
	</h1>

</div>



<div class="container" style="margin-top: -150px;">
	<div class="row">
		<div class="col-md-7">			
			<img src="kids.png" class="img-responsive" style="margin-top: -20px;height: 65%;">
		</div>
		<div class="col-md-5">			
			<div class="jumbotron" style="border:2px solid pink;">
				<h2>Delivery Person - Login</h2>
				<form action="#" method="POST">
				<input type="text" name="txt_uname" class="form-control" placeholder="Enter Username">
				<br>
				<input type="password" name="txt_password" class="form-control" placeholder="Enter Password">
				<br>
				<input type="submit" name="btn_login" value="LOGIN" class="btn btn-primary">
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

$uname = $_POST['txt_uname'];
$password = $_POST['txt_password'];

$con = mysqli_connect("localhost","root","","class");

if(isset($_POST['btn_login']))
{
          // $status = 0;
    $query="select*from person where username ='".$uname."' and password ='".$password."' ";
    
    $read=mysqli_query($con,$query);

    $row =mysqli_fetch_array($read);

    if($row > 0)
    {

    	echo "<script>window.location='porders.php';</script>";
    }
    else
    {
    	echo "<script>alert('Wrong Credentials');</script>";
    }


}


?>