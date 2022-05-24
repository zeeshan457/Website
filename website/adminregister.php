<?php
session_start();

/*admin details to access the Database*/
$con = mysqli_connect('localhost', 'root', '');

/*Database connect*/
mysqli_select_db($con, 'ZSportsDatabase');


$name = $_POST['user'];
$pass = $_POST['password'];
$pass2 = $_POST['RepeatPassword'];

/*access the table in database */
$s = " SELECT * FROM admin_table WHERE name = '$name' LIMIT 1";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


/*if details match, do not update details*/
if($num == 1) {
  echo '<script type="text/javascript">
  alert("username has been taken, Please try again!");
  window.location=\'adminindex.php\';
  </script>';

/*if details are diffferent create a new record*/
} else {
$reg = " insert into admin_table(name, password) values ('$name' , '$pass')";
mysqli_query($con, $reg);
echo '<script type="text/javascript">
alert("Registration Successful, Please login!");
window.location=\'adminindex.php\';
</script>';
}
?>


