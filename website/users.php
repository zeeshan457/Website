<?php
require_once ("connectDB.php");
if(isset($_GET['id'])){

  //get a id record
  $id = $_GET ['id'];

  //delete a user from database
  $sql = "DELETE FROM users_table where id = '$id'";
  $result = mysqli_query($conn ,$sql );

}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS_files\adminpanel.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.topnav {
  overflow: hidden;
}

.topnav a {
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
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  animation: transition  0.2s;


}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;

}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: black;
  color: white;
  border: 1px solid rgb(255, 255, 255); 

}

.button {
  position: relative;
  background: linear-gradient(-45deg, #000000, #1f042c, #000000, #1f042c);
  background-size: 200% 200%;
  animation: change 10s ease-in-out infinite;  
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 100%;
  border: 1px solid rgb(255, 255, 255); 
  animation: transition  2s;


}

.buttonBlue a {
  position: static;
  background-color: #4CAF50;
  text-align: center;
  border: 1px solid rgb(255, 255, 255); 
} 


a:link {
  text-decoration: none;
  color: white;
  position: relative;
  text-align: center;

}

.buttonAction {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
  border: 1px solid rgb(255, 255, 255); 
 
}
.button .a {
  position: relative;
  text-align: center;

}
/* animation - transition */
@keyframes change {
  0% {
    background-position: 0 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0 50%;
  }
  }

@keyframes transition {
  from{
  opacity: 0;
  transform: translate(-30px);
  
  }
  to {
    opacity: 1;
    transform: translate(0);
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
<div style="padding-left:16px;padding-right: 16px;">


<div class = "container-caption">
  <caption>Users</caption>

</div><button class="button buttonBlue"><a href="addusers.php">ADD A USER TO TABLE & DATABASE</a></button>
<br><br>
<table id="customers">
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </div>
  <?php

      //variables 
      $count=0;
      $sql ="select * from users_table";
      $result= mysqli_query($conn,$sql);
     
     
                   if(!$result){
                   } else {


                   //while loop to print the table and display all the contents from database. 
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
                               <td>  <?php       
                            echo $row['password'];
                             ?>  </td>


                                <td>
                            <button  class="buttonAction"> <a href="editusers.php?id=<?= $row['id'] ?>" > EDIT </a> </button>
                               </td>

                               <td>       
                          <button  class="buttonAction"><a href="users.php?id=<?= $row['id'] ?>"> Delete</a></button>
                               </td>
                     </tr>
                    
                     <?php
     
                }
                }
           ?>
      <tr>
</tr>
 

  
</table>
</div>
</body>
</html>