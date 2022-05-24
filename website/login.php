
<?php
session_start();

/*Admin details to access the Database*/
$con = mysqli_connect('localhost', 'root', '');

/*Database connect*/
mysqli_select_db($con, 'ZSportsDatabase');


$name = $_POST['user'];
$pass = $_POST['password'];


/*access the table*/
$s = " SELECT * FROM users_table WHERE name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


/*if details match, redirect to homepage*/
$_SESSION['username'] = $name;
if($num == 1) {
  echo '<script type="text/javascript">
  alert("Login successsful, Welcome!");
  window.location=\'Homepage.php\';
  </script>';

  
/*if details are different, alert user, redirect to index page*/
} else {
  echo '<script type="text/javascript">
  alert("Incorrect Username or Password, Please try again!");
  window.location=\'index.php\';
  </script>';

}

?>








