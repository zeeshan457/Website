<!DOCTYPE html>
<html lang="en">
<head>
<link href="CSS_files\login_and_register.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login_and_registration</title>

  <script type = "text/javascript">

    //validate username and password length
    function ValidateRegistration() {
      if( document.myForm.username.value.length < 6 ) {
      alert("username must have at least 6 characters!");
      document.myForm.username.focus();
      return false;
      }

      if( document.myForm.password.value.length < 6 ) {
      alert("password must have at least 6 characters!");         
      document.myForm.password.focus();
      return false;
      }

      if( document.myForm.password.value != document.myForm.RepeatPassword.value) {
      alert("password does not match, try again!");         
      document.myForm.password.focus();
      return false;
      }

      //username validation - containing certain values
      DataValues = /^\w+$/;
      if(!DataValues.test(document.myForm.username.value)) {
      alert("username must contain only letters, numbers and underscores!");
      document.myForm.username.focus();
      return false;
      }

      //password validation - containing certain values
      DataValues2 = /^\w+$/;
      if(!DataValues2.test(document.myForm.password.value)) {
      alert("password must contain only letters, numbers and underscores!");
      document.myForm.password.focus();
      return false;
      }
      
      //password Validation for containing a digit
      DataDigits = /[0-9]/;
      if(!DataDigits.test(document.myForm.password.value)) {
      alert("password must contain at least one number (0-9)!");
      document.myForm.password.focus();
      return false;
      }
      return( true );
   }

</script>

</head>
<body>
<body style="background-color: black;">

<!--login-->
<div class = "container">
<div class = "login-box">
<div class = "row">
<div class="col-md-6 login-left">
  <h2> User Login  </h2>
  <form action="login.php" method="post">
    <div classs="form-group">
      <label> Username </label>
      <input type="text" id = "username" name="user" class="form-control" required>
    </div>
    <div class="form-group">
      <label> Password </label>
      <input type="password" name="password" id = "password" class="form-control" required>
      <a href="adminindex.php">Are you an Admin? Click here</a>    
    </div>
    <button type="submit" class="btn btn-primary"> Login
    </button>
  </form>
</div>


<!--register-->
<div class="col-md-6 register-right">
  <h2> User Register  </h2>
  <form name="myForm" action="registration.php" onsubmit="return ValidateRegistration()" method="post">  
    <div classs="form-group">
      <label> Username </label>
      <input type="text" id = "username" name="user" class="form-control" required>
    </div>
    <div class="form-group">
      <label> Password </label>
      <input type="password" id = "password" name="password" class="form-control" required>

      <label> Repeat Password </label>
      <input type="password" id = "RepeatPassword" name="RepeatPassword" class="form-control" required>

    </div>
    <button type ="submit" class="btn btn-primary"> Register
    </button>
  </form>
</div>
</div>
</div>



</body>
</html>