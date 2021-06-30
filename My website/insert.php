<?php 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "rchimheno@cut.ac.zw";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@Superprint Media Website.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:thankyou.html");
?>