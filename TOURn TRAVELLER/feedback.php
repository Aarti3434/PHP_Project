<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<br>
<center>
  <h1>All Feedbacks....</h1>
<a href="index.php" class="btn btn-danger">Log Out</a>
</center>
<br>
<div class="container">
 <table border="1" cellpadding="15" width="100%" class="table table-borderd">
 <tr>
  <th>Sr.no</th>
   <th>NAME</th>
   <th>Email</th>
   <th>MOBILE</th>
   <th>Subject</th>
   <th>Message</th>
    

    </tr>
     
 <?php
 
    $con=mysqli_connect("localhost","root","","turism");
    $query="select*from contact";
    $read=mysqli_query($con,$query);

    $counter=0;
    while($row =mysqli_fetch_array($read))

    {
      $counter++;

       echo"
       <tr>
            <td>$counter</td>
             <td>$row[name]</td>
           <td>$row[email]</td>
           <td>$row[mobail]</td>
           <td>$row[subject]</td>
           <td>$row[message]</td>

                     </tr>
    ";
    }
          
     ?>
      
    
 </table>
</body>
</html>