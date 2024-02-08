<nav class="navbar navbar-expand-md " style="background-color: pink;">
  <a class="navbar-brand" href="#" style="">DELICIOUS ICP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="background: black;">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="add_products.php" >ADD PRODUCTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="orders.php" >PENDING</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="complete.php">COMPLETE</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">FEEDBACK</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="feedback.php" style="background: red;" data-toggle="modal" data-target="#myModal" >Delivery Person</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="feedback.php" style="background: ;" data-toggle="modal" data-target="#showModal" >Show Person</a>
      </li>    
      
      <li class="nav-item">
        <a class="nav-link" href="index.php">LOGOUT</a>
      </li>
      
    </ul>
  </div>  
</nav>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Add Delivery Person</h4>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <br>
        
      </div>
      <div class="modal-body">
      <form action="#" method="POST">
        <input type="text" name="txt_name" placeholder="Enter Name" class="form-control">
        <br>
        <input type="text" name="txt_mobile" placeholder="Enter Mobile" class="form-control">
        <br>
        <input type="text" name="txt_username" placeholder="Enter Username" class="form-control">
        <br>
        <input type="Password" name="txt_password" placeholder="Enter Password" class="form-control">
        <br> 
        <input type="submit" name="btn_save" class="btn btn-info" value="Add Person">
        <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="order.php#showModal">Open Modal</button> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php

$conn = mysqli_connect("localhost","root","","class");

$status =0;

date_default_timezone_set('Asia/Calcutta');

$date = date('m/d/Y h:i:s a', time());


if(isset($_POST['btn_save']))
{

  mysqli_query($conn,"insert into person (name,mobile,username,password) values ('".$_POST['txt_name']."','".$_POST['txt_mobile']."','".$_POST['txt_username']."','".$_POST['txt_password']."')");

  echo "<script>alert('Delivery Person Added Successfully');</script>";
  echo "<script>window.location='orders.php'</script>";
}

?>


<!-- Show Modal -->
<div id="showModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Show Delivery Person</h4>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <br>
        
      </div>
      <div class="modal-body">
        <table class="table">
          <tr>
            <td>Srno</td>
            <td>Name</td>
            <td>Mobile</td>
            <td>Username</td>
            <td>Password</td>
          </tr>
          <?php
$con = mysqli_connect("localhost","root","","class");
          // $status = 0;
    $query="select*from person  ";
    $read=mysqli_query($con,$query);


    $counter=0;
    while($row =mysqli_fetch_array($read))
    {
      $counter++;
      echo "
          <tr>
            <td>$counter</td>
            <td>$row[name]</td>
            <td>$row[mobile]</td>
            <td>$row[username]</td>
            <td>$row[password]</td>
          </tr>
      

      ";
    }
          ?>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>