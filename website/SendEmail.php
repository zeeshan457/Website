<?php 


//Email destination
$ToEmail = 'zsportswebsite@gmail.com'; 

$EmailSubject = 'ZSports Website contact'; 
$mailheader = "From: ".$_POST["Email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["Email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 


//Email body
$MESSAGE_BODY = "First Name: ".$_POST["Name"].'<br><br>'; 
$MESSAGE_BODY .= "Last Name: ".$_POST["Last-Name"].'<br><br>'; 
$MESSAGE_BODY .= "Email: ".$_POST["Email"].'<br><br>'; 
$MESSAGE_BODY .= "Country: ".$_POST["Country"].'<br><br>'; 
$MESSAGE_BODY .= "Subject: ".nl2br($_POST["Subject"]).'<br><br>'; 


//send email, checking for errors, display alert.
if (mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) == true) {
echo '<script type="text/javascript">
alert("form was sent successuly, thanks for the feedback!");
window.location=\'contact.php\';
</script>';

} else {
echo '<script type="text/javascript">
alert("error, please try again!");
window.location=\'contact.php\';
</script>';

}

?>

