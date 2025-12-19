<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info.openfirebt@gmail.com";
    $subject = "New Prayer Request Submission";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $prayer = htmlspecialchars($_POST['prayer']);
    $body = "Prayer Request Submission:\n\nName: $name\nEmail: $email\nPrayer Request:\n$prayer\n";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    if(mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! Your prayer request has been sent.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong. Please try again.'); window.location.href='index.html';</script>";
    }
} else {
    header("Location: index.html");
    exit;
}
?>
