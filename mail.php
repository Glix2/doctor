<?php

if(isset($_POST['passw']) && $_POST['passw'] != "")
  die();

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "spaoffice@spadoctor-va.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="stud/new.css">
  </head>
  <body>

<div class="container">
  <h1>Thank you for contacting us!</h1>
  <h1>We will get back to you as soon as possible.</h1>
   <a href="index.html" class="home">Go back to the Homepage</a>
</div>

  </body>
</html>


';

 ?>
