
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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


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
<H2>PENDING ORDERS</H2>
<br>
<div class="table-responsive">
 <table border="1" cellpadding="15" width="100%" class="table table-borderd" id="tblUser">
 <thead>
 	 <td>SRNO</td>
 	 <td>PRODUCT</td>
   <td>PRICE</td>
   <td>QUNT</td>
   <TD>TOTAL</TD>
   <TD>DELIVERY</TD>
   <TD>NET TOTAL</TD>
   <TD>CUSTOMER</TD>
   <TD>MOBILE</TD>
   <TD>ADDRESS</TD>
   <TD>PAY MODE</TD>
   <TD>STATUS</TD>
   <TD>OPTION</TD>
  </thead>
     
 <?php
    $con=mysqli_connect("localhost","root","","laxmi");
    $status = 0;
    $query="select*from orders where status = ".$status." ";
    $read=mysqli_query($con,$query);


    $counter=0;
    while($row =mysqli_fetch_array($read))

    {
    	$counter++;

    	 echo"
    	 <tr>
        <td>$counter</td>
   <td>$row[product]</td>
   <td>$row[price]</td>
   <td>$row[quantity]</td>
   <td>$row[total]</td>
   
   <td>$row[delivery]</td>
   <td>$row[final_total]</td>
   <td>$row[cname]</td>
   <td>$row[mobile]</td>
   <td>$row[address]</td>
   <td>$row[mode]</td>
   
   <TD>Order Pending</TD>
   <TD>
      <a href='up.php?id=$row[id]' class='btn btn-danger'>COMPLETE
      </a>
   </TD>
 	</tr>

    ";
    }
          
     ?>
      
    
 </table>

 <script>
$(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>


</body>
</html>
