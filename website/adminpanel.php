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

<!DOCTYPE html>
<html lang="en">

<head> 
  <!--link JS & CSS-->
  <link href="CSS_files\adminpanel.css" rel="stylesheet" type="text/css">


  <script src="JS_folder\index.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Admin Panel</title>
</head>

<body>
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


  <!--content & information-->
  <div class="content">
    <header>Admin Panel! </header>
    <p>
      This is the Admin Panel, here you can add, edit and delete products, 
      the products will be shown for the users and products will be inserted into 
      the database table! Also you can add, edit and delete users that are regsistered
      on the site!
    </p>
  </div>





</body>
</html>