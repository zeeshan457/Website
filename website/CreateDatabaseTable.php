<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "ZSportsDatabase";


//connect to Database 
$conn = new mysqli($servername, $username, $password, $db);


//creating users table using SQL commands
$sql = "CREATE TABLE users_table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
password VARCHAR (255)
)";

//creating admin user table using SQL commands
$sql = "CREATE TABLE admin_table (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  password VARCHAR (255)
  )";


//creating product table using SQL commands
$sql = "CREATE TABLE product_table (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  price VARCHAR(50),
  description VARCHAR(255),
  image VARCHAR(255),
  category VARCHAR(255),
  user_id int(30)
  )";

//insert data into the tables.
$query = "INSERT INTO admin_table (id, name, password) VALUES (1, 'admin', 'admin')";
$result1 = $conn->query($query);

$query = "INSERT INTO users_table (id, name, password) VALUES (1, 'user', 'user')";
$result2 = $conn->query($query);


       if ($conn->query($sql) === TRUE && $result1 === TRUE) {
        echo '<script type="text/javascript">
        alert("All tables created successfully also added admin details to the admin_users table!");
        window.location=\'index.php\';
        </script>';    
      
      } else {
        echo '<script type="text/javascript">
        alert("Failed, or most passed!");
        window.location=\'index.php\';
        </script>';
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the INSERT Query");
        $conn->close();

      }