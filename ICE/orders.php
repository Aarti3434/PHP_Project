
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
<H2>PENDING ORDERS</H2>
<br>
<div class="table-responsive">
 <table border="1" cellpadding="15" width="100%" class="table table-borderd">
 <tr>
 	 <td>SRNO</td>
   <td>Timing</td>
 	 <td>PRODUCT</td>
   <td>PRICE</td>
   <td>QUNT</td>
   <TD>TOTAL</TD>
   <td>DISCOUNT</td>
   <TD>DELIVERY</TD>
   <TD>NET TOTAL</TD>
   <TD>CUSTOMER</TD>
   <TD>MOBILE</TD>
   <TD>ADDRESS</TD>
   <TD>PAY MODE</TD>
   <TD>STATUS</TD>
   <!-- <TD>OPTION</TD> -->
    </tr>
     
 <?php
    $con=mysqli_connect("localhost","root","","class");
    $status = 0;
    $query="select*from orders where status = ".$status." ";
    $read=mysqli_query($con,$query);


    $counter=0;
    while($row =mysqli_fetch_array($read))

    {
    	$counter++;


      if($row['status']=='p')
      {
        $tr_col = 'table-danger';
        $ostatus="r"; 
        $string = 'Order Pending';
        $btn_col ='btn-warning';
      }
      if($row['status']=='r')
      {
        $tr_col = 'table-info';
        $ostatus= "g";  
        $string ='Order Pending';
        $btn_col ='btn-success';
      }
      if($row['status']=='g')
      {
        $tr_col = 'table-success';
        // $ostatus= "g";  
        $string ='Order Done';
        $btn_col ='btn-danger disabled';
      }

    	 echo"
    	 <tr class='$tr_col'>
        <td>$counter</td>
        <td style='color:red;font-weight:bold;'> $row[dtime] </td>
   <td>$row[product]</td>
   <td>$row[price]</td>
   <td>$row[quantity]</td>
   <td>$row[total]</td>
   <td>$row[discount]</td>
   <td>$row[delivery]</td>
   <td>$row[final_total]</td>
   <td>$row[cname]</td>
   <td>$row[mobile]</td>
   <td>$row[address]</td>
   <td>$row[mode]</td>
   
   <TD>

    $string
   </TD>
   
 	</tr>

    ";
    }
          
     ?>
      
    
 </table>
</body>
</html>
