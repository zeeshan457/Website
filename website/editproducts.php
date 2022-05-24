<?php
session_start();

//check login
if (!isset($_SESSION['username'])) {
  echo '<script type="text/javascript">
  alert("You are not logged in!");
  window.location=\'index.php\';
  </script>';
}
?>


<?php
require_once ("connectDB.php");
if(isset($_POST['Update']) && isset($_GET['id'])){

  //variables
  $name = $_POST['name'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $category = $_POST['category'];
   
  //get ID
  $id = $_GET['id'];

 //update table and set the results with new results
  $sql = "UPDATE product_table SET name = '$name', price = '$price', description = '$description', category = '$category' where id = '$id'";
  $result = mysqli_query($conn ,$sql );

  if($result == TRUE) {
    echo "<script type='text/javascript'>alert('Product has been updated successfully!');
    window.location='productspage.php';
    </script>";


  } else {
    echo "<script type='text/javascript'>alert('errror, could not update the product!');
    window.location='productspage.php';
    </script>";
  }


}
//if product has an ID
if (isset($_GET['id'])) {

//variables to get the information, if that product already contains information
$id = $_GET['id'];

//select from table if the product has and ID
$sql = "select * from product_table where id = $id" ;
$result = mysqli_query($conn ,$sql );
$row = mysqli_fetch_array($result);
$name = $row['name'];
$price = $row['price'];
$category = $row['category'];
$description = $row['description'];
$image = $row['image'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS_files\adminpanel.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
margin: 0;
font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a.active {
  background-color: lightseagreen;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) 
  {

    display: none;
  }
  
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}


.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
  width: 100%;
}

.buttonBlue {background-color: #008CBA;} /* Blue */
a:link {
  text-decoration: none;
  color: white;
}

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  border: 1px solid rgb(255, 255, 255); 

}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: gray;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 10%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 90%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>

 <!--logo-->
 <nav>
    <div class="logo">
      <img src="Assets\manchester united lgo.gif" />
  </div>
    <!--Header-->
    <div class="header">
      ZSPORTS
    </div>

    <!--Nav Buttons-->
    <ul>
    <li><a href="adminpanel.php">Admin Panel</a></li>
    <li><a href="users.php">Users</a></li>
      <li><a href="productspage.php">Products</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
<body style="background-color: black;">

<div class="topnav" id="myTopnav">
<nav>
</div>

<div style="padding-left:16px;padding-right: 16px;">
<div class = "container-caption">
  <caption>Edit products</caption>
</div> 

<!--table/form for updating a product-->
<div class="container">
<form action="editproducts.php?id=<?=$row['id']?>" method="POST">
  <div class="row">
    <div class="col-25">
      <label>Product Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" value="<?php  echo $name?>" placeholder="type a product name">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Price</label>
    </div>
    <div class="col-75">
      <input type="text" id="price" name="price" value="<?php  echo $price?>" placeholder="type a price">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Description</label>
    </div>
    <div class="col-75">
      <input type="text" id="description" name="description" value="<?php  echo $description?>" placeholder="type a description">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Category</label>
    </div>
    <div class="col-75">
      <input type="text" id="category" name="category" value="<?php  echo $category ?>" placeholder="type a category">
    </div>
  </div>
  
 
<br>
  <div class="row">
    <input type="submit" value="Update" name="Update">
  </div>
</form>
</div>



</body>
</html>