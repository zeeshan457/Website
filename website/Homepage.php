<?php
session_start();
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
  <link href="CSS_files\homepage.css" rel="stylesheet" type="text/css">


  <script src="JS_folder\index.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Homepage</title>
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
    <!--icons-->
    <label for="btn" class="icon">
      <span class="fa fa-bars"></span>
    </label>



    <!--Home button-->
    <input type="checkbox" id="btn">
    <ul>
      <li><a href="Homepage.php">Home</a></li>
      <!--clothing button-->
      <li>
        <label for="btn-1" class="show">Clothing +</label>
        <a href="#">Clothing</a>
        <input type="checkbox" id="btn-1">
        <ul>
          <li><a href="Jackets.php">Jackets</a></li>
          <li><a href="Joggers.php">Joggers</a></li>
          <li><a href="Shirts.php">Shirts</a></li>
          <li><a href="Trainers.php">Trainers</a></li>
        </ul>
      </li>
      <!--More button-->
      <li>
        <label for="btn-2" class="show">More +</label>
        <a href="#">More</a>
        <input type="checkbox" id="btn-2">
        <ul>
          <li><a href="Sports_Equipment.php">Equipment </a></li>
          <li><a href="Sports_Accessories.php">Accessories</a></li>
        </ul>
      </li>
      <!--search button-->
      <li><a href="searchproducts.php">Search</a></li>
      <!--contact button-->
      <li><a href="Contact.php">Contact</a></li>
      <!--logout-->
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>


  <!--content & information-->
  <div class="content">
    <header>Welcome to ZSPORTS, where you can find all your Sports Essencials!
    </header>
    <p>
      In this site we have a range of products that are sport related such as clothing and sports essencials, we hope
      you have a good time using our websites, if there are any problems feel free to contact us!
    </p>
  </div>

    <!--images-->
  <div class="midimage">
      <img src="Assets\homeimage.gif" alt="home1">
    </div>

  
  <!--footer-->
  <footer>
    <div class="footer-content">
      <h3>ZSPORTS</h3>
      <p>Please follow our social media to stay updated on our new products, also please provide some feedback!</p>
      <ul class="socials">
        <li><a href="https://en-gb.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://myaccount.google.com/intro/profile"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
        <li><a href="https://uk.linkedin.com/"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>copyright &copy;2020 ZSPORTS. designed by <span>Zeeshan</span></p>
    </div>
  </footer>


</body>
</html>