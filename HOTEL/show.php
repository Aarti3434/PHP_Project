<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
<table class="table table-bordered table-striped" width="100%">
	<tr>
		<th>no</th><th>name</th><th>email</th><th>contact</th><th>adhar no</th><th>rooms
		</th><th>option</th>
	</tr>
	<?php


    
    $con = mysqli_connect("localhost","root","","hotel");
   
        $query = "select * from login";
        $read = mysqli_query($con,$query);
        $no=0;

        while ($row=mysqli_fetch_array($read))
         {
         	$no++;
        	echo "
            <tr>
              <td>$no</td>
              <td>$row[name]</td>
              <td>$row[email]</td>
              <td>$row[contact]</td>
              <td>$row[adhar_no]</td>
              <td>$row[rooms]</td>
              <td>  
                  <a href='up.php?studid=$row[sid]' class='btn btn-success'> UP </a>

                  <a href='del.php?studid=$row[sid]' class='btn btn-danger'> DEL </a>
              </td>
            </tr>

        	";
        }
        
        
        

  ?>
</table>
</body>
</html>