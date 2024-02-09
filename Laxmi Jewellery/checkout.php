<?php

$product =$_GET['product'];
$price = $_GET['price'];
$img = $_GET['img'];

?>
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
<script type="text/javascript">
	function mul() {
        var value1 = parseFloat(document.getElementById("id_price").value)
        var value2 = parseFloat(document.getElementById("id_qnt").value)
        var total = value1 * value2 
        document.getElementById("id_total").value = total
        // var value3 = parseFloat(document.getElementById("id_discount").value)
        var value4 = parseFloat(document.getElementById("id_delivery").value)
        var var_final_total =  total  + value4 ;
        document.getElementById("id_final_total").value = var_final_total


    }
    
</script>
</head>
<body>

<?php include_once"nav.php"; ?>


<div style="background: url(http://cdn.shopify.com/s/files/1/0658/3225/5726/collections/NLJ_Banner05_1546x546_1.webp?v=1664262993);background-size: 130%;height: 350px;background-repeat: no-repeat;background-attachment: fixed;">

<br><br><br>
	<h1 style="text-align: center;color: white;text-shadow: 2px 2px blue;">
LAXMI JEWELLERS
	</h1>

</div>


<div class="container" style="margin-top: -10px;">
<br><br>
<div class="" style="border:2px solid black;">



	<div class="row">
		<div class="col-md-6">
				<br><br>
				<h3 align="center">Checkout</h3>
				<form action="#" method="POST">
				<hr>
					<center>
					<img src="<?php echo  $img ?>" class="img-thumbanil" style="width: 250px;">
					</center>

					<input type="hidden" name="txt_img" value="<?php echo  $img ?>">

				<table class="table">

					<tr>
						<td>PRODUCT</td>
						<td>
							<input type="text" name="txt_product" value="<?php echo $product; ?>" class="form-control" readonly>
						</td>
					</tr>
					<tr>
						<td>PRICE</td>
						<td>
							<input type="text" name="txt_price" value="<?php echo $price; ?>" class="form-control" readonly id="id_price">
						</td>
					</tr>
					<tr>
						<td>QUANTITY</td>
						<td>
							<input type="number" name="txt_quantity" value="" class="form-control" id="id_qnt" onchange="mul();" >
						</td>
					</tr>
					<tr>
						<td>TOTAL</td>
						<td>
							<input type="number" name="txt_total" value="" class="form-control"  id="id_total" readonly>
						</td>
					</tr>
					
					<tr>
						<td>DELIVARY CHARGE</td>
						<td>
							<input type="number" name="txt_delivery" value="300" class="form-control"  id="id_delivery" readonly>
						</td>
					</tr>


				</table>

		</div>

		<div class="col-md-6">

		<table class="table" style="margin-top: 290px;">
					<tr>
						<td>FINAL BILL AMOUNT</td>
						<td>
							<input type="number" name="txt_final_total" value="" class="form-control"  id="id_final_total" readonly="">
						</td>
					</tr>


					<tr>
						<td>CUSTOMER NAME</td>
						<td>
							<input type="text" name="txt_cname" value="" class="form-control" >
						</td>
					</tr>
					<tr>
						<td>MOBILE NUMBER</td>
						<td>
							<input type="text" name="txt_mobile" value="" class="form-control" >
						</td>
					</tr>
					<tr>
						<td>ADDRESS</td>
						<td>
							<textarea class="form-control" name="txt_address"></textarea>
						</td>
					</tr>
					<tr>
						<td>PAYMENT MODE</td>
						<td>
							<select name="txt_mode" class="form-control">
								<option value="Cash	">Cash on Delivery</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="btn_checkout" value="CHECKOUT" class="btn btn-warning">
						</td>
					</tr>

				</table>
			
		</div>
	</div> <!-- row closed -->	
</div>


</body>
</html>
<?php

$conn = mysqli_connect("localhost","root","","laxmi");

$status =0;

if(isset($_POST['btn_checkout']))
{

	mysqli_query($conn,"insert into orders (product,price,quantity,total,delivery,final_total,cname,mobile,address,mode,status) values ('".$_POST['txt_product']."','".$_POST['txt_price']."','".$_POST['txt_quantity']."','".$_POST['txt_total']."','".$_POST['txt_delivery']."','".$_POST['txt_final_total']."','".$_POST['txt_cname']."','".$_POST['txt_mobile']."','".$_POST['txt_address']."','".$_POST['txt_mode']."',".$status.")");

	echo "<script>alert('Order Placed Successfully - Please Visit Again');</script>";
	echo "<script>window.location='index.php'</script>";
}

?>
