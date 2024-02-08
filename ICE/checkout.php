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
	span
	{
		color: red;
		font-weight: bold;
	}
</style>
<script type="text/javascript">
	function mul() {
        var price = parseFloat(document.getElementById("id_price").value)
        // get price 
        var qnt = parseFloat(document.getElementById("id_qnt").value)
        // get qnt 
        var total = price * qnt 
        // find total 
        document.getElementById("id_total").value = total
        // dispaly in textbox
        
        var delivery = parseFloat(document.getElementById("id_delivery").value)
        // get delivery CHARGE
 		var discount_per = parseFloat(document.getElementById("id_discount").value)
 		// kiti takke discount

        var total_w_d =  total + delivery
        // tot madhe total + delivery chargeg add kele

        var dis_value = total_w_d * discount_per / 100
        // tya total var discount_per varun value kadhali

        var net = total_w_d - dis_value
        // ithe total amount discount minuz kele 
        document.getElementById("id_final_total").value = net


    }
    
</script>
</head>
<body>

<?php include_once "nav.php"; ?>


<div class="container" style="margin-top: -150px;">
<div class="" style="border:2px solid black;">
	<div class="row">
		<div class="col-md-6">
				<br><br><br><br><br><br><br><br><br>
				<h3 align="center">Order Now</h3>
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
						<td>QUANTITY <span>*</span></td>
						<td>
							<!-- <input type="number" name="txt_quantity" value="" class="form-control" id="id_qnt" onchange="mul();" > -->
				<input type="number" min="0" name="txt_quantity" id="id_qnt" onchange="mul();" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" class="form-control" required>

						</td>
					</tr>
					<tr>
						<td>TOTAL</td>
						<td>
							<input type="number" name="txt_total" value="" class="form-control"  id="id_total" readonly required>
						</td>
					</tr>
					<tr>
						<td>DISCOUNT </td>
						<td>
							<input type="number" name="txt_discount"      value="<?php echo $_GET['discount'] ?>" class="form-control"  id="id_discount" readonly>
						</td>
					</tr>
					<tr>
						<td>DELIVARY CHARGE</td>
						<td>
							<input type="number" name="txt_delivery" value="40" class="form-control"  id="id_delivery" readonly>
						</td>
					</tr>


				</table>

		</div>

		<div class="col-md-6">

		<table class="table" style="margin-top: 290px;">
					<tr>
						<td>FINAL BILL AMOUNT</td>
						<td>
							<input type="number" name="txt_final_total" value="" class="form-control"  id="id_final_total" readonly="" required>
						</td>
					</tr>


					<tr>
						<td>CUSTOMER NAME <span>*</span></td>
						<td>
							<input type="text" name="txt_cname" value="" class="form-control" required>
						</td>
					</tr>
					<tr>
						<td>MOBILE NUMBER <span>*</span></td>
						<td>
							<input type="number" name="txt_mobile" value="" class="form-control" maxlength="0" onchange="isValid_Mobile_Number();" id="id_mobile" required >
							<!-- <span id="span_error"></span> -->
						</td>
					</tr>
					<tr>
						<td>ADDRESS <span>*</span></td>
						<td>
							<textarea class="form-control" name="txt_address" required></textarea>
						</td>
					</tr>
					<tr>
						<td>PAYMENT MODE</td>
						<td>
							<select name="txt_mode" class="form-control">
								<option value="Online">PAY ONLINE</option>
								<option value="Cash">Cash on Delivery</option>
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

<script type="text/javascript">

	function isValid_Mobile_Number(mobile_number) {
    // Regex to check valid
    // mobile_number 
    let regex = new RegExp(/(0|91)?[6-9][0-9]{9}/);
 
 	var mobile_number = document.getElementById('id_mobile').value
    
    if(regex.test(mobile_number) == true) 
    {
    	Count();
    			return "true";        	
    
        

    }
    else {
        alert('Enter Valid Number');
        document.getElementById("id_mobile").focus();


    }
}
 
 function Count() {  
  
            var i = document.getElementById("id_mobile").value.length; 
            if(i > 10)
            {
            	alert('Only 10 Number');
            	document.getElementById("id_mobile").focus();

            } 
            // document.getElementById("span_error").innerHTML = 10 - i;  

        }  
</script>
<script type="text/javascript">

      	    </script>

</body>
</html>
<?php

$conn = mysqli_connect("localhost","root","","class");

$status ='p';

date_default_timezone_set('Asia/Calcutta');

$date = date('m/d/Y h:i:s a', time());


if(isset($_POST['btn_checkout']))
{

	mysqli_query($conn,"insert into orders (dtime,product,price,quantity,total,discount,delivery,final_total,cname,mobile,address,mode,status) values ('".$date."','".$_POST['txt_product']."','".$_POST['txt_price']."','".$_POST['txt_quantity']."','".$_POST['txt_total']."','".$_POST['txt_discount']."','".$_POST['txt_delivery']."','".$_POST['txt_final_total']."','".$_POST['txt_cname']."','".$_POST['txt_mobile']."','".$_POST['txt_address']."','".$_POST['txt_mode']."','".$status."')");

	echo "<script>alert('Order Placed Successfully');</script>";
	echo "<script>window.location='index.php'</script>";
}

?>
