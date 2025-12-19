<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = htmlspecialchars(strip_tags($_POST["name"]));
  $email = htmlspecialchars(strip_tags($_POST["email"]));
  $message = htmlspecialchars(strip_tags($_POST["message"]));

  $to = "info.openfirebt@gmail.com";
  $subject = "New Contact / Prayer Request - Open Fire International";

  $body = "Name: $name\n";
  $body .= "Email: $email\n\n";
  $body .= "Message:\n$message";

  $headers = "From: no-reply@openfireinternational.org\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "<h2>Thank you!</h2>";
    echo "<p>Your message has been sent successfully.</p>";
    echo "<a href='index.html'>Return to Website</a>";
  } else {
    echo "<h2>Error</h2>";
    echo "<p>There was an issue sending your message. Please try again later.</p>";
  }
}
?>

