<?php
$cn = mysqli_connect("localhost","root","","turism");
?>
<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

</head>
<body style="background:;">

<center>
<h2 style="color: black;">Admin</h2>

<a href="show.php" class="btn btn-warning">All Registration</a>
<a href="index.php" class="btn btn-danger">Logout</a>
</center>

<br><br>

  <div class="container">
    <table class="table table-bordered" style="color:black;" id="tblUser">
      <thead>

        <td>Srno</td>
        <td>Name</td>
        <td>Mobile</td>
        <td>Address</td>
        <td>Destination</td>
        <td>How Many Peoples</td>
        <td>Arrivals date</td>
        <td>Leaving Date</td>
        <td>OPTIONS</td>
      </thead>
      <?php

        $sql="select * from destination";
        $read = mysqli_query($cn,$sql);
        $cno=0;
        while($row = mysqli_fetch_array($read))
        {
          // echo $row[0];
          $cno++;                                                             

        

      ?>
      <tr>
        <td><?php echo $cno; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['mobail']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['destination']; ?></td>
        <td><?php echo $row['how_many_peoples']; ?></td>
        <td><?php echo $row['start_date']; ?></td>
         <td><?php echo $row['leaving_date']; ?></td>
        <td>
           
          <a href="up.php?tid=<?php echo $row['tid'];?>" class="btn btn-success btn-sm" style="margin-bottom: 10px">
            <span class="glyphicon glyphicon-pencil"></span> Edit
            </a>

         
         <br>

           <a href="del.php?tid=<?php echo $row['tid'];?>" class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon-trash"></span> Del
           </a>
        </td>

      </tr>
      <?php 
    }
    ?>
    </table>
  </div>


  <script>
$(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>

</body>
</html>
