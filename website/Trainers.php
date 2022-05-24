<?php
session_start();

//check if user is logged in
if (!isset($_SESSION['username'])) {
  echo '<script type="text/javascript">
  alert("You are not logged in!");
  window.location=\'index.php\';
  </script>';
}

/*Admin details to access the Database*/
$con = mysqli_connect('localhost', 'root', '');

/*Database connect*/
mysqli_select_db($con, 'ZSportsDatabase');


?>





<!DOCTYPE html>
<html lang="en">

<head>
  <!--links-->
  <link href="CSS_files\pages.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trainers</title>
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


<table>
<caption>Trainers</caption>
</table>

<!--table-->
<table id="products">
  <tr>
  <th>Sr#</th>
    <th>Product Name</th>
    <th>Image</th>
    <th>Description</th>
    <th>Category</th>
    <th>Price</th>
  </tr>
  </div>
  <?php

      //variables 
      $count=0;
      $sql ="SELECT * FROM product_table WHERE category like '%trainers%'";
      
      $result= mysqli_query($con, $sql);
     
     
                   if(!$result){
                    echo"no products with this category";
                   } else {


                   //while loop to print the table and display  contents from database. 
                   while ($row = mysqli_fetch_array($result)) {
                      $count++;
                          
                     ?>
                     
                     <tr>
                     <td>  <?php       
                            echo $count;
                             ?>  </td>
                            <td>  <?php       
                            echo $row['name'];
                             ?>  </td>
                            <td>        
                            <img src="<?= $row['image']?>" width="200px" height="200px"/>
                               </td>  
                               <td>  <?php       
                            echo $row['description'];
                             ?>  </td> 

                                 <td>  <?php       
                            echo $row['category'];
                             ?>  </td> 

                                 <td>  <?php       
                            echo $row['price'];
                             ?>  </td>
                     </tr>
                     <?php
     
                }
                }
           ?>
      <tr>
</tr>
</table>





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