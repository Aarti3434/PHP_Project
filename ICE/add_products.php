
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
  <div class="col-md-3">
    
  </div>
  <div class="col-md-6">

    <h2>Add Products</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <table class="table">
        <tr>
          <th>Category </th>
          <td>
            <select class="form-control" name="txt_cat">
              <option>Select Cat</option>
              <option>FRUITS</option>
              <option>CHOCOLATE</option>
              <option>CONE</option>
              <option>NO SUGAR</option>
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
          <th>DISCOUNT </th>
          <td>
            <input type="text" name="txt_discount" class="form-control" placeholder="Enter Rs.">
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
  <div class="col-md-3">
    
  </div>

</div> <!-- row closed -->

<div class="row">
  <div class="col-md-1">
    
  </div>
  <div class="col-md-10">
    <table class="table table-bordered">
      <tr>
        <td>Srno</td>
        <td>PHOTO</td>
        <td>Category</td>
        <td>Products</td>
        <td>Price</td>
        <td>DISCOUNT</td>
        <td>
            OPTIONS
        </td>
      </tr>
      <?php

error_reporting(0);
$con=mysqli_connect("localhost","root","","class");

$query  = "select * from products ORDER BY id DESC";
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
        <td>$row[discount]</td>
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


</body>
</html>
<?php

error_reporting(0);
$con=mysqli_connect("localhost","root","","class");

    $filename = $_FILES["txt_file"]["name"];
    $tempname = $_FILES["txt_file"]["tmp_name"];
    $folder = "./products/" . $filename;


if(isset($_POST['btn_add']))
{
  
  
 move_uploaded_file($tempname, $folder);

  mysqli_query($con,"insert into products (cat,name,photo,price,discount)values('".$_POST['txt_cat']."','".$_POST['txt_name']."','".$filename."','".$_POST['txt_price']."','".$_POST['txt_discount']."')");

 


  // header("Location:add_products.php");
  echo "
<script>window.location='add_products.php' </script>
  ";
}

?>