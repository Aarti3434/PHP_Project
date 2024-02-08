<?php

  $sid = $_GET['studid'];

     $con = mysqli_connect("localhost","root","","hotel");

     $sql = "select * from login where sid=".$sid." ";

     $read = mysqli_query($con,$sql);

     while($row=mysqli_fetch_array($read))

     {
     	$sid = $row['sid'];
     	$name = $row['name'];
     	$email = $row['email'];
     	$contact = $row['contact'];
     	$adhar_no = $row['adhar_no'];
      $rooms = $row['rooms'];

     }

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 		  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 </head>
 <body>
 
      
<form action="#" method="POST">
<center>
<h2>Update  Details</h2>
</center>
<table border="1" cellpadding="10" class="table table-border">
  <tr>
    <th>Name:</th>
    <td>
       	 <input type="text" name="txt_name" class="form-control" value="<?php echo $name; ?>">
    </td>

   	</tr>


  <tr>
    <th>email:</th>
    <td>
         <input type="text" name="txt_email" class="form-control" value="<?php echo $email; ?>">
    </td>

    </tr>


  <tr>
    <th>contact:</th>
    <td>
         <input type="text" name="txt_contact" class="form-control" value="<?php echo $contact; ?>">
    </td>

    </tr>
<tr>
  <th>adhar no</th>
  <td>
     <input type="text" name="txt_adhar" class="form-control" value="<?php echo $adhar_no; ?>">
  </td>
</tr>

  <tr>
    <th>rooms:</th>
    <td>
               <select class="form-control" name="txt_rooms" value="<?php echo $rooms; ?>">
                  <option>select rooms</option>
                  <option>AC ROOMS (JUST FOR 4 .MEM)</option>
                  <option>NONE AC (JUST FOR 4 .MEM)</option>
                  <option>SIMPLE (JUST FOR 4 .MEM)</option>
                  <option>CONFERNCE HALL (JUST FOR 100.SET)</option>
                </select>
    </td>

    </tr>
<tr>
  
<td>
   	 <input type="submit" name="btn-save" value="update" class="btn btn-primary">
     <a href="show.php" class='btn btn-warning'>Show record</a>
</td>
</tr>




</table>
   </form>



 </body>
 </html>


<?php

    if(isset($_POST['btn-save']))
    {

        $query = "update login set name='".$_POST['txt_name']."',email='".$_POST['txt_email']."',contact='".$_POST['txt_contact']."',adhar_no='".$_POST['txt_adhar']."',select='".$_POST['txt_rooms']."' where sid=".$sid." ";


        mysqli_query($con,$query);

        echo "<script> alert('Data Saved') </script>";

        echo "<script> window.location='show.php' </script>";

    }

?>