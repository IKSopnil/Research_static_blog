<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // validate email address here if necessary
  
  $to = "roarmode@gmail.com";
  $subject = "New message from " . $name;
  $body = "Name: " . $name . "\nEmail: " . $email . "\n\n" . $message;
  $headers = "From: " . $email;
  
  if(mail($to, $subject, $body, $headers)) {
    echo "Mail sent successfully.";
  } else {
    echo "Mail sending failed.";
  }
}
?>
