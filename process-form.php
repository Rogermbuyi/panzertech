<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Set the recipient email address
  $to = "rogermbuyi99@gmail.com";

  // Set the email subject and body
  $subject = "New message from $name";
  $body = "Name: $name\nEmail: $email\nPhone: $phone\n\n$message";

  // Set the email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  mail($to, $subject, $body, $headers);

  // Redirect the user to a thank-you page
  header("Location: thankyou.html");
  exit();

}

?>
