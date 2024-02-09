<?php

    error_reporting(0);
    session_start();  //step 1
     $con=mysqli_connect("localhost","root","","showroom");
  
     $uname=$_POST['txt_uname'];
     $password=$_POST['txt_password'];

  if(isset($_POST['btn_show']))
   {

     $query="select * from admin where uname='".$uname."' and password='".$password."' ";

       $read=mysqli_query($con,$query);

       $row= mysqli_fetch_array($read);
            
        if($row > 0)
        {
            $_SESSION['uname']=$uname;  //step 2
             
          echo "<script>window.location='show.php'</script>";
        }

         else{

           echo "<script>alert('incorrect username & password')</script>";

        }
  }
     
  ?>




   <?php include_once "nav.php"  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <scrpt src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="htps://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
     body{
             background: linear-gradient(to bottom, #006699 0%, #ffffff 100%);

     }
  </style>
</head>
<body>
  <form method="POST" action="#">
  <img src="https://www.hyundaicanada.com/-/media/hyundai/showroom/2017/accent-4-door/minigallery/desktop/img_006.jpg" style="background-attachment:fixed; background-size:100%; background-repeat: no-repeat; height:100%; width:100%;">
   <div class="container">
     <div class="row">
       <div class="col-md-3">
         
       </div>
       <div class="col-md-6">
        
             <div class="jumbotron"style="border:4px solid blue; background-image:linear-gradient(to top, #669900 0%, #ffffff 100%); margin-top: -60px; border-radius:20px;">
                
                <h2 style="color:blue;text-align: center; border-radius: 120px;">Admin - Login </h2><br>
                <form action="#" method="POST">
                <input type="text" name="txt_uname" class="form-control" placeholder="Enter Username">
                <br>
                <input type="password" name="txt_password" class="form-control" placeholder="Enter Password">
                <br>
                <center>
                <input type="submit" name="btn_show" value="LOGIN" class="btn btn-info">
            </center>
                <br><br>
                </form>
            </div>
       </div>
       <div class="col-md-3">
         
       </div>     
     </div>
   </div>

  </form>
   



</body>
</html>

