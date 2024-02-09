
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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


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


<br><br><br>
<div class="container">

<div class="row">
  
  <div class="col-md-8">

    <h2>Add Products</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <table class="table">
        <tr>
          <th>Category </th>
          <td>
            <select class="form-control" name="txt_cat">
              <option>Select Cat</option>
              <option>GOLD</option>
              <option>PLATINUM</option>
              <option>DIAMOND</option>
              <option>SILVER</option>
              <option>PEARL</option>
              <option>BROOCH</option>
              <option>EMERALD</option>
              <option>SPECIAL</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>PRODUCT NAME </th>
          <td>
            <input type="text" name="txt_name" class="form-control" placeholder="Enter Name">
          </td>
        </tr>
        <tr>
          <th>PHOTO </th>
          <td>
            <input type="file" name="txt_file" class="form-control" >
          </td>
        </tr>
        <tr>
          <th>PRICE </th>
          <td>
            <input type="text" name="txt_price" class="form-control" placeholder="Enter Price">
          </td>
        </tr>
        
        <tr>
          <th> </th>
          <td>
            <input type="submit" name="btn_add" class="btn btn-success" value="Add Products">
          </td>
        </tr>

      </table>    
  </div>
  <div class="col-md-4">
  <br><br>
    <img src="https://images.shaadisaga.com/shaadisaga_production/photos/pictures/003/556/513/new_medium/ss20220331-7013-1ksns0a.jpg?1648734210" class="img-thumbnail">
  </div>

</div> <!-- row closed -->

<div class="row">
  <div class="col-md-1">
    
  </div>
  <div class="col-md-10">
    <table class="table table-bordered" id="tblUser">
      <thead>
        <td>Srno</td>
        <td>PHOTO</td>
        <td>Category</td>
        <td>Products</td>
        <td>Price</td>
        
        <td>
            OPTIONS
        </td>
      </thead>
      <?php

error_reporting(0);
$con=mysqli_connect("localhost","root","","laxmi");

$query  = "select * from products ORDER BY id DESC ";
$read = mysqli_query($con,$query);

$no =0;
while($row = mysqli_fetch_array($read))
{
  $no++;
  echo "

      <tr>
        <td>$no</td>
        <td><img src='./products/$row[photo]' style='width:105px;height:105px;'></td>
        <td>$row[cat]</td>
        <td>$row[name]</td>
        <td>$row[price]</td>
        
        <td>
          <a href='del.php?id=$row[id]' class='btn btn-danger'>
          DEL
          </a>
        </td>
      </tr>


  ";
}


      ?>
    </table>
  </div>
  <div class="col-md-1">
    
  </div>
</div>

</div>


<script>
$(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>

</body>
</html>
<?php

error_reporting(0);
$con=mysqli_connect("localhost","root","","laxmi");

    $filename = $_FILES["txt_file"]["name"];
    $tempname = $_FILES["txt_file"]["tmp_name"];
    $folder = "./products/" . $filename;


if(isset($_POST['btn_add']))
{
  
  
 move_uploaded_file($tempname, $folder);

  mysqli_query($con,"insert into products (cat,name,photo,price)values('".$_POST['txt_cat']."','".$_POST['txt_name']."','".$filename."','".$_POST['txt_price']."')");

 


  // header("Location:add_products.php");
  echo "<script>window.location='show_products.php' </script>  ";
}

?>