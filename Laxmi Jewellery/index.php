<?php 
error_reporting(0);
$cat = $_GET['cat'];  ?>

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
	.img-thumbnail
	{
		height: 260px;
		width: 260px;
		border:3px solid #cc3300;
		border-radius: 8px;
		opacity: 2;
	}
	.nav-link
	{
		color: white;
	}
	
	.txt
	{
		text-align:center;
		color: #cc3300;
		margin-top: -140px;
	}
	a
	{
		color:#cc3300;
		
	}
	a:hover
	{
		background-color: black;
		text-decoration: none;
		color: white;
		/padding: 15px;/

	}
	.col-md-3
	{
		margin-top: 125px;
	}
	
	.myImg
	{
		height: 150px;
	}


	.card
	{
		border:2px solid #cc3300;
		/*margin-top: 10px;*/
		height: 320px;

	}
	.btn-primary
	{
		background: #cc3300;
		color: blue;
		font-weight: bolder;
	}
</style>
</head>
<body>
<?php include_once "nav.php"; ?>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i0.wp.com/www.blog1.trymintly.com/wp-content/uploads/2022/05/1647819891_new-project-22.jpeg?fit=900%2C506&ssl=1" width="100%" height="450px">
    </div>
    <div class="carousel-item">
      <img src="https://www.smergers.com/media/businessphoto/33048-1564385751-1a4f2bba-e317-467c-ae88-b8dd3d029db4.jpg" width="100%" height="450px">
    </div>
    <div class="carousel-item">
      <img src="https://c8.alamy.com/comp/FAJBF4/gold-jewelry-shop-in-little-india-of-kuala-lumpur-malaysia-FAJBF4.jpg" width="100%" height="450px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<br>
<div class="alert alert-danger" style="margin-left:  65px;margin-right: 65px;border: 2px solid #cc3300;">
	<marquee><img src="https://thumbs.gfycat.com/BlondSilentBluetonguelizard-size_restricted.gif" style="height: 45px;width: 55px;">
	<span style="color: black;">Padwa - Speacial Offer - 1% Discount on any order </span>
	</marquee>
</div>
<div class="container" id="PRODUCTS" style="margin-top: -100px;">
	<div class="row">
	 <div class="col-md-3">
		 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9kU0lTA2IHTToLGmPXZHWyNIGAbOpiDxzhA&usqp=CAU" class="img-thumbnail">
	 	 <h2 class="txt">
	 	 	<a href="index.php?cat=GOLD#list">GOLD</a>
	 	 </h2>
	 </div>
	 <div class="col-md-3">
		 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMbBXekpWA5yMEvhEIispEi7V4PpCF1XFFaw&usqp=CAU" class="img-thumbnail">
		 <h2 class="txt">
		 <a href="index.php?cat=PLATINUM#list">PLATINUM</a>
		 </h2>
	 </div>
	 <div class="col-md-3">
		 <img src="https://smedn7cdn.candere.com/media/jewellery/images/C022896_1.jpeg" class="img-thumbnail">
		 <h2 class="txt">
		 	<a href="index.php?cat=DIAMOND#list">DIAMOND</a>
		 </h2>
	 </div>
	 <div class="col-md-3">
		 <img src="https://www.abhooshan.com/image/cache/catalog/Product-Image/CHAIN/CH07/CH07_01-550x550h.JPG" class="img-thumbnail">
		 <h2 class="txt">
		 <a href="index.php?cat=SILVER#list">SILVER</a>
		 
		 </h2>
	 </div>
	 <div class="col-md-3">
		 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvTunVSgj4NzmyiHiC3tTX_L_nWjzqoBy8KA&usqp=CAU" class="img-thumbnail">
		 <h2 class="txt">
		 <a href="index.php?cat=PEARL#list">PEARL</a>
		 </h2>
	 </div>
	 <div class="col-md-3">
		 <img src="https://assets.ajio.com/medias/sys_master/root/20220712/rtXY/62cd8ad3f997dd03e2cf96e8/-473Wx593H-6005635340-multi-MODEL.jpg" class="img-thumbnail" >
		 <h2 class="txt">
		 <a href="index.php?cat=BROOCH#list">BROOCH</a>		 
		 </h2>
	 </div>
	 <div class="col-md-3">
		 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0ND4MMo9qlk0_vGPq5gJVRFlfXRPxMJirCw&usqp=CAU" class="img-thumbnail">
		 <h2 class="txt">
		 	<a href="index.php?cat=EMERALD#list">EMERALD</a>		 
		 </h2>
	 </div>
	<div class="col-md-3">
		 <img src="https://i.pinimg.com/originals/c6/2f/e8/c62fe839d50f19d203e577e8ef277020.jpg" class="img-thumbnail">
		 <h2 class="txt">
		 	<a href="index.php?cat=ALL#list">SPEACIAL</a>		 
		 </h2>
	</div>
</div> <!-- row closed -->


<div class="alert alert-danger" style="background:black;margin-left:  15px;margin-right: 15px;margin-top:150px;border: 2px solid #cc3300;margin-bottom: -50px;">
	<span style="color: white;">CATEGORY - <?php echo $cat;  ?>  </span>
	</marquee>
</div>


 
<div class="row" id="list" style="margin-top: 55px;">

 <?php

error_reporting(0);
$con=mysqli_connect("localhost","root","","laxmi");

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
		<div class='col-md-3' style='margin-top:10px;'>
			<div class='card' style=''>
			  <img class='card-img-top' src='./products/$row[photo]' alt='Card image' class='img-thumbnail myImg' style='height:150px;'>
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


</body>
</html>