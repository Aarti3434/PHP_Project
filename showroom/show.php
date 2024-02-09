
   <!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <style type="text/css">
      body{
            background: linear-gradient(to top, #666633 0%, #ffff66 100%);

            background-repeat: no-repeat;
            background-size: 100%;
            background-attachment: fixed;
      }   

    </style>
</head>
<body>
<br>
<div class="container">
 <table border="1" cellpadding="15" width="100%" class="table table-borderd" id="tblUser">
 <thead class="table-dark">
 	 <td>NAME</td>
 	 <td>MOBILE</td>
 	 <td>MODEL</td>
 	 <td>PRICE</td>
 	 <td>STATE</td>
 	 <td>CITY</td>
     <td>OPTIONS</td>

    </thead>
     
 <?php
 
    $con=mysqli_connect("localhost","root","","showroom");
    $query="select*from customer";
    $read=mysqli_query($con,$query);

    $counter=0;
    while($row =mysqli_fetch_array($read))

    {
    	$counter++;

    	 echo"
    	 <tr>
           <td>$row[name]</td>
 	         <td>$row[mobile]</td>
 	         <td>$row[model]</td>
             <td>$row[price]</td>
 	         <td>$row[state]</td>
 	         <td>$row[city]</td>

             <td>
            
            <a href='up.php?sid=$row[id]' class='btn btn-success'>UP</a>

            <a href='del.php?sid=$row[id]' class='btn btn-danger'>DEL</a>

            
            </td>
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

     <center>
         <a href="project.php" class="btn btn-info" style="border: 4px solid black; font-weight: bold;">LOGOUT</a>
     </center>
</body>
</html>
</body>
</html>