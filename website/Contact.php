<?php
session_start();

//check user login
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
  <!--links-->
  <link href="CSS_files\contactpage.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--JS validation-->
  <script type = "text/javascript">
  
      function validateForm() {
      
      //no input fields validation
      if( document.myForm.fname.value == "") {
         alert( "Please provide your First Name!" );
         document.myForm.fname.focus() ;
         return false;
      }
      if( document.myForm.lname.value == "" ) {
         alert( "Please provide your Last Name!" );
         document.myForm.lname.focus() ;
         return false;
      }
      if( document.myForm.Country.value == "-1" ) {
         alert( "Please provide your country!" );
         document.myForm.Country.focus() ;
         return false;
      }
      if( document.myForm.Subject.value == "" ) {
         alert( "Please provide the Subject!" );
         document.myForm.Subject.focus() ;
         return false;
      }
 
     
      //length validation for textbox/input fields
      if( document.myForm.fname.value.length < 3 ) {
         alert( " your first name must have at least 3 characters!" );
         document.myForm.fname.focus() ;
         return false;
      }
      if( document.myForm.lname.value.length < 3 ) {
         alert( " your last name must have at least 3 characters!");
         document.myForm.lname.focus() ;
         return false;
      }
      if( document.myForm.Email.value.length < 6) {
         alert( " your e-mail must have at least 6 characters!");
         document.myForm.Email.focus() ;
         return false;
      }
      if( document.myForm.Subject.value.length < 20) {
         alert( " The subject message must have at least 20 characters!" );
         document.myForm.Subject.focus() ;
         return false;
      }

       //Email Validation syntax.
       if(document.myForm.Email.value == ""){
				alert("Please provide your email!");
				document.myForm.Email.focus();
				return false;
			}
			var str = document.myForm.Email.value;
			var length = str.length;
			var At_count = 0;
			var At_position;
			var Errors = 1;
			
			for(i = 0; i < length; i++){
				if(str [i] == '@'){
					At_position = i;
					atcount++;
				}
			if(str [i] == ' '){
					alert("e-mail must not contain a space, please try again!");
					document.myForm.Email.focus();
					return false;
				}
			}
			if(At_count != 1 || str[length - 1] == '.'|| str[length - 2] == '.' || str[At_position + 1] == "."){
				alert("e-mail Invalid syntax, please try again!");
				document.myForm.Email.focus();
				return false;
			}
			for(i = At_position; i < length; i++){
				if(str [i] == "."){
					Errors = 0;
					break;
				}
			}
			if(Errors){
				alert("e-mail Invalid syntax, please try again!");
				document.myForm.Email.focus();
				return false;
			}
      return( true );
   }
   </script>   


  <title>Contact us</title>
</head>

<body>
<body style="background-color: black;">

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

<div class = "container-caption">
  <caption>Contact Form</caption>
</div>


  <!--contact form-->
  <form name="myForm" action="SendEmail.php" onsubmit="return validateForm()" method="post">
  <div class="container">

    <label for="fname">First Name</label>
    <textarea id = "fname" name = "Name" placeholder = "First Name" style = "height: 50px"></textarea>

    <label for="lname">Last Name</label>
    <textarea id = "lname" name = "Last-Name" placeholder = "Last Name" style = "height: 50px"></textarea>

    <label for="Email">Email</label>
    <textarea id = "Email" name = "Email" placeholder = "Email" style = "height: 50px"></textarea>

    <label for="Country">Country</label>
    <select id="Country" name="Country">
    <option value = "-1" selected>[Select your Country]</option>
    <option value = "USA">USA</option>
    <option value = "UK">UK</option>
    <option value = "Australia">Australia</option>
    <option value = "Spain">Spain</option>
    <option value = "France">France</option>
    <option value = "Germany">Germany</option>
    </select>

    <label for="Subject">Subject</label>
    <textarea id="Subject" name="Subject" placeholder="Message" style="height:200px"></textarea>

    <button type = "submit" >Submit</button>


  </form>
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