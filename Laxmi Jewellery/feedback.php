
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

<?php include_once "admin_nav.php"; ?>

<div class="container">
<br><br>
<H2> CUSTOMERS FEEDBACK </H2>
<br>
<div class="table-responsive">
 <table border="1" cellpadding="15" width="100%" class="table table-borderd">
 <tr>
 	 <td>SRNO</td>
   <TD>NAME</TD>
   <TD>MOBILE</TD>
   <TD>FEEDBACK</TD>
    </tr>
     
 <?php
    $con=mysqli_connect("localhost","root","","laxmi");
    $status = 0;
    $query="select*from feedback ";
    $read=mysqli_query($con,$query);


    $counter=0;
    while($row =mysqli_fetch_array($read))

    {
    	$counter++;

    	 echo"
   <tr>
        <td>$counter</td>
       <td>$row[name]</td>
       <td>$row[mobile]</td>
       <td>$row[feedback]</td>   
   
 	</tr>

    ";
    }
          
     ?>
      
    
 </table>
</body>
</html>
