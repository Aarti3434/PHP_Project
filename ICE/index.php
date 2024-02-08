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

<?PHP include_once "nav.php"; ?>



<div class="container" style="margin-top: -0px;">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="index.php">ALL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?cat=FRUITS">FRUITS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?cat=CHOCOLATE">CHOCOLATES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?cat=CONE">CONE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="index.php?cat=NO SUGAR">NO SUGAR</a>
  </li>
  
</ul>

<div class="row">

 <?php

error_reporting(0);
$con=mysqli_connect("localhost","root","","class");

$cat =$_GET['cat'];

if($cat == "")
{
	$query  = "select * from products ORDER BY id DESC";
}
else
{
	$query  = "select * from products where cat ='".$cat."' ORDER BY id DESC";
}

$read = mysqli_query($con,$query);

$no =0;
while($row = mysqli_fetch_array($read))
{
	if($row[discount] > 0)
	{
		$lable = $row[discount]. "% discount";
	}
	else
	{
		$lable = "";	
	}
  $no++;
  echo "
		<div class='col-md-3'>
			<div class='card' style=''>
			  <img class='card-img-top' src='./products/$row[photo]' alt='Card image' class='img-thumbnail'>
			  <div class='card-body'>
			    <h4 class='card-title'>$row[name]</h4>
			    <p class='card-text'>$row[price]Rs.</p> 
			    <h5> $lable </h5>
			    
			    <a href='checkout.php?product=$row[name]&price=$row[price]&img=./products/$row[photo]&discount=$row[discount]' class='btn btn-primary'>ORDER NOW</a>
			  </div>
			</div>	 <!-- card closed -->
		</div>  <!-- col-md-3 closed -->
  ";
}


      ?>
		
</div> <!-- row closed -->


	
</div>


</body>
</html>