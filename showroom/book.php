<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="htps://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
   body{
         background: url(https://blog.travelcarma.com/wp-content/uploads/2017/06/car-rental-banner.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        background-attachment: fixed;
      }

    table{

    background: linear-gradient(to bottom, #660033 0%, #ffccff 100%);

        }

   
    </style>
</head>
<body>
      <form method="POST" action="#">
       <div class="container">
         <div class="row">
           <div class="col-md-6">
             
         <center>
      
      <h1 style="color: yellow; font-family: Segoe Print; font-size:30px;
        margin-top: 90px;">________Book Now_________</h1>
      </center>
          <br>
        <table border="1" cellspacing="12" class="table table-borderd" >
      
             <tr>
               <td>
                 <input type="text" name="txt_name" placeholder="Enter the Name" class="form-control">
               </td>
             </tr>
              <tr>
               <td>
                 <input type="number" name="txt_mob" placeholder="Enter the Mobile" class="form-control">
               </td>
             </tr>
              <tr>
               <td>
               <input type="text" name="txt_model" placeholder="Enter the Model" class="form-control">

               </td>
             </tr>
                <tr>
               <td>
                 <input type="number" name="txt_price" placeholder="Enter the Price" class="form-control">
               </td>
             </tr>
               <tr>
               <td>
                 <input type="text" name="txt_state" placeholder="Enter the State" class="form-control">
               </td>
             </tr>
              <tr>
               <td>
                 <input type="text" name="txt_city" placeholder="Enter the City" class="form-control">
               </td>
             </tr>
        
          </table>
            <center>
              
                <input type="submit" name="btn_show" value="BOOK NOW" class="btn btn-warning" style="width: 100%">
              </table>  
            </center>
           </div>
           <div class="col-md-6">
             </div>
           </div>
        </div>

   </body>
   </html>
</form>


  <?php
  $con=mysqli_connect("localhost","root","","showroom");
   if(isset($_POST['btn_show']))
   {
     mysqli_query($con,"insert into customer(name,mobile,model,price,state,city)values('".$_POST['txt_name']."','".$_POST['txt_mob']."','".$_POST['txt_model']."','".$_POST['txt_price']."','".$_POST['txt_state']."','".$_POST['txt_city']."')");

    echo "<script> alert('Successfully Booked')</script>";

   }

  ?>

  