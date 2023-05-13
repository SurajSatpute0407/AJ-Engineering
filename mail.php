<?php
//get data from form  
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$number = $_POST['mobile'];
$message= $_POST['comment'];
$to = "adityathorat866@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $firstname.  "\r\n  Email = " . $email . "\r\n Mobile no =" . $number. "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.php");
?>