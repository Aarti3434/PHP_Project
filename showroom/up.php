<?php

 $sid=$_GET['sid'];
 echo $sid;
    
    $con=mysqli_connect("localhost","root","","showroom");
    $query="select * from customer where id= '".$sid."' ";

    $read=mysqli_query($con,$query);
    while($row =mysqli_fetch_array($read))
    { 
 
       $name=$row['name'];
       $mobile=$row['mobile'];
       $model=$row['model'];
       $price=$row['price'];
       $state=$row['state'];
       $city=$row['city'];
      

      
     }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 <style type="text/css">
   
      body{
           
               background: linear-gradient(to bottom, #666633 0%, #ccccff 100%);
       }

       table{
               margin-top: 60px;
        }

 </style>
<body>

<br>
<div class="container"> 

<form action="#" method="POST">
<center>
<table border="1" cellspacing="12" class="table table-borderd" >
        <center>
      
      <h1 style="color: orange; font-family: Segoe Print; font-size:40px;
        margin-top: 20px;">_______Data Update_________</h1>
    </center>
      <tr>
         <td>
            <input type="text" name="txt_name" value="<?php echo $name;?>" placeholder="Enter the Name" class="form-control">
         </td>
           </tr>
       <tr>
         <td>
           <input type="number" name="txt_mobile" value="<?php echo $mobile;?>" placeholder="Enter the Mobile" class="form-control">
            </td>
         </tr>
        <tr>
          <td>
          <input type="text" name="txt_model" value="<?php echo $model;?>"  placeholder="Enter the Model" class="form-control">
               </td>
             </tr>
          <tr>
       <td>
         <input type="number" name="txt_price" value="<?php echo $price;?>" placeholder="Enter the Price" class="form-control">
        </td>
       </tr>
      <tr>
         <td>
           <input type="text" name="txt_state" value="<?php echo $state;?>" placeholder="Enter the State" class="form-control">
       </td>
         </tr>
          <tr>
         <td>
         <input type="text" name="txt_city" value="<?php echo $city;?>" placeholder="Enter the City" class="form-control">
               </td>
             </tr>
      </table>
          <center>
            <input type="submit" name="btn_update" value="UPDATE" class="btn btn-warning" style="width: 100%">
              </table>  
            </center>  
        

        </form>
      </center>
      </body>
   </html>

    


  <?php

    if(isset($_POST['btn_update']))
  {
     $query = "Update customer set name='".$_POST['txt_name']."', mobile='".$_POST['txt_mobile']."', model='".$_POST['txt_model']."', price='".$_POST['txt_price']."',state='".$_POST['txt_state']."',city='".$_POST['txt_city']."'      where id= ".$sid." ";

          mysqli_query($con,$query);
          echo"<script>alert('Data Updated');</script>";
          echo "<script> window.location='show.php'</script>";


  }       

  ?>