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

<div class="container" style="margin-top: -150px;">
	<div class="row" >
		<div class="col-md-7" >		 	
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.335437700155!2d74.74822381415636!3d19.952390686591215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc6dd9267655a1%3A0x34a113d8adf82384!2sMIT%20Polytechnic%20College%20Rotegaon!5e0!3m2!1sen!2sin!4v1678513822932!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
		</div>
		<div class="col-md-5">			
		<form action="" method="POST">
			<div class="jumbotron" style="border:2px solid pink;">
				<h2>Feedback Form</h2>
				<input type="text" name="txt_name" class="form-control" placeholder="Enter Your Name" required>
				<br>

				<input type="text" name="txt_mobile" class="form-control" placeholder="Enter mobile number" onchange="isValid_Mobile_Number();" id="id_mobile" required>
				<br>
				
				<textarea class="form-control" name="txt_feedback" required></textarea>
				<br>

				<br>
				<input type="submit" name="btn_submit" value="Submit Feedback" class="btn btn-info">
				<br><br>
			</form>
			</div>
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

</body>
</html>

<?php

error_reporting(0);
$con=mysqli_connect("localhost","root","","class");

if(isset($_POST['btn_submit']))
{
   
  mysqli_query($con,"insert into feedback(name,mobile,feedback)values('".$_POST['txt_name']."','".$_POST['txt_mobile']."','".$_POST['txt_feedback']."')");

 
  echo "
<script>window.location='index.php' </script>
  ";
}



?>