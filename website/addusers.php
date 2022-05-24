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
if(isset($_POST['submit'])) {

//creating variables for each input field
$username = $_POST['name'];
$password = $_POST['Password'];


//Inserting the user information in the database
$query="insert into users_table (name, password) values ('$username','$password')"; 

$result1 = $conn->query($query);

//checking if the user can be added or not
if ($result1 === TRUE) {
echo "<script type='text/javascript'>alert('user has been added successfully!');
window.location='users.php';
</script>";
} else {
echo "<script type='text/javascript'>alert('error, user was not added!');
window.location='users.php';
</script>";}

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

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: lightseagreen;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
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



input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
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

<nav>
  <!--logo-->
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

<div class = "container-caption">
<caption>Add User</caption> 
</div>


<!--table/form for adding a product-->
<div style="padding-left:16px;padding-right: 16px;">
  <div class="container">
  <form action="addusers.php" method="POST" enctype="multipart/form-data">


    <div class="row">
      <div class="col-25">
        <label>Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="type username">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label>Password</label>
      </div>
      <div class="col-75">
        <input type="text" id="Password" name="Password" placeholder="type password">
      </div>
    </div>


<br>

    <!--submit-->
    <div class="row">
      <input type="submit" value="submit" name="submit">
    </div>
  </form>
</div>
</div>


</body>
</html>
